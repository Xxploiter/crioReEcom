<?php

class Category
{

    public function create($DATA)
    {
        $db = Database::newInstance();
        $arr['category'] = ucwords($DATA->data);
        if (!preg_match('/^[a-z A-Z ]+$/', trim($arr['category']))) {
            $_SESSION['error'] = 'please insert a valid cata name';
        }
        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "INSERT INTO categories (category) VALUES (:category)";
            $check = $db->write($query, $arr);
            if ($check) {             
                return true;
            }
        }
        return false;
    }

    public function edit($id, $categoryName)
    {
        $db = Database::newInstance();
        $arr['id'] = $id;
        $arr['category'] = $categoryName;
        $query = "UPDATE categories SET category = :category WHERE id = :id limit 1";
        $result = $db->write($query,$arr);
        return $result;
    }

    public function delete($id)
    {
        $db = Database::newInstance();
        $id = (int)$id;
        $query = "DELETE FROM categories WHERE id = '$id' limit 1";
        $result = $db->write($query);
        return $result;
    }
    public function getAll()
    {
        $db = Database::newInstance();
        $result = $db->read("SELECT * FROM categories ORDER BY id DESC");
        return $result;
    }
    public function make_table($allCategory)
    {
        $result = "";
        if (is_array($allCategory)) {
            $index = 1;
            foreach ($allCategory as $categoryRow) {
                $categoryNameIs =  "'$categoryRow->category'"; //here extracting the category name first as string values in onlick js creates problem
                if ($categoryRow->disabled) {
                    $status = 'Not-Active';
                    $class = 'danger';
                    $toggle = 'Activate';
                    $toggleStyle = 'success';
                } else {
                    $status = 'Active';
                    $class = 'success';
                    $toggle = 'Deactivate';
                    $toggleStyle = 'warning';
                }
                $result .= '<tr class="tableRow">
                    <td><strong>' . $index . '</strong></td>
                    <td>' . $categoryRow->category . '</td>
                    <td><span class="badge light badge-' . $class . '">' . $status . '</span></td>
                    <td><button onClick="toggleStateCategory({event:event,id:' . $categoryRow->id . ',currentState:' . $categoryRow->disabled . '})" type="button" class="btn light btn-' . $toggleStyle . '">' . $toggle . '</button>
                        <button data-toggle="modal" data-target="#editCategoryModal" onClick="editCategoryModalData({event:event,id:' . $categoryRow->id . ',categoryName:' . $categoryNameIs . '})" type="button" class="btn light btn-info">Edit</button>
                        <button onClick="dltCategory({event:event,id:' . $categoryRow->id . '})" type="button" class="btn light btn-danger">Dlt</button>
                    </td>
                </tr>';
                $index = $index + 1;
            }
        }
        return $result;
    }
}
