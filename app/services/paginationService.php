<?php 
class PaginationService {
    
    // private $db;
    private $itemsPerPage = 16;
    
    // public function __construct($db, $itemsPerPage = 10) {
    //     $this->db = $db;
    //     $this->itemsPerPage = $itemsPerPage;
    // }
    
    public function getItemsPaginated($db, $query, $page = 1) {
        // show($page);
        // die;
        // Calculate the offset based on the current page number and the number of items per page
        $offset = ($page - 1) * $this->itemsPerPage;
        
        // Add a LIMIT clause to the query to return a limited set of results
        $query = "$query LIMIT $this->itemsPerPage OFFSET $offset";
        $items = $db->read($query);

        // Get the total number of items from the database
        $totalItems = $db->read("SELECT COUNT(*) AS count FROM ($query) AS sub")[0]->count;
        
        // Calculate the total number of pages based on the total number of items and the number of items per page
        $totalPages = ceil($totalItems / $this->itemsPerPage);
        
        // Return an array with the items and pagination information
        return [
            'items' => $items,
            'currentPage' => $page,
            'totalPages' => $totalPages //here total pages is how many pages it will take to render $itemsPerPage i know its weird as it will be 1 max no, of times but 
            //this will be helpful later down the line when doing complex stuff totalPages is not all items / items per page so total pages will be their
            ];
        }
        
    }
    ?>