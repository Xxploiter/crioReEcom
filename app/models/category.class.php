<?php

class Category
{

    public function create($DATA)
    {
        $db = Database::newInstance();
        $arr['category'] = ucwords($DATA->category);
        $arr['parent'] = ucwords($DATA->parentCategory);
        if (!preg_match('/^[a-z A-Z ]+$/', trim($arr['category']))) {
            $_SESSION['error'] = 'please insert a valid cata name';
        }
        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "INSERT INTO categories (category, parent) VALUES (:category, :parent)";
            $check = $db->write($query, $arr);
            if ($check) {             
                return true;
            }
        }
        return false;
    }

    public function edit($data)
    {
        $db = Database::newInstance();
        $arr['id'] = $data->id;
        $arr['category'] = $data->category?? 0;
        $arr['parent'] = $data->categoryParent ?? 0;
        $query = "UPDATE categories SET category = :category , parent = :parent WHERE id = :id limit 1";
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
    public function getOne($id)
    {
        $id = (int)$id;
        $db = Database::newInstance();
        $result = $db->read("SELECT * FROM categories WHERE id = '$id' LIMIT 1");
        return $result[0] ?? 'returned null';
    }
    public function make_table($allCategory)
    {
        $result = "";
        if (is_array($allCategory)) {
            $index = 1;
            foreach ($allCategory as $categoryRow) {
                $categoryNameIs =  "'$categoryRow->category'"; //here extracting the category name first as string values in onlick js creates problem

                $parentCategoryObject = $this->getOne($categoryRow->parent) ;
                $parent = $parentCategoryObject->category?? 'No-parent';
                // below is another way to get the parent category name 
                // foreach($allCategory as $categoryParentRows){
                //     if($categoryRow->parent == $categoryParentRows->id){
                //         $parent = $categoryParentRows->category;
                //     }
                // }


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
                    <td>' . $parent . '</td>
                    <td><span class="badge light badge-' . $class . '">' . $status . '</span></td>
                    <td><button onClick="toggleStateCategory({event:event,id:' . $categoryRow->id . ',currentState:' . $categoryRow->disabled . '})" type="button" class="btn light btn-' . $toggleStyle . '">' . $toggle . '</button>
                        <button data-toggle="modal" data-target="#editCategoryModal" onClick="editCategoryModalData({event:event,id:' . $categoryRow->id . ',categoryName:' . $categoryNameIs . ',parent:' . $categoryRow->parent . '})" type="button" class="btn light btn-info">Edit</button>
                        <button onClick="dltCategory({event:event,id:' . $categoryRow->id . '})" type="button" class="btn light btn-danger">Dlt</button>
                    </td>
                </tr>';
                $index = $index + 1;
            }
        }
        return $result;
    }
}
