<?php
class AddToCart extends Controller
{

private $redirectTo = "";



    public function index($id = '')
    {
        $this->set_redirectTo();
        //   $retailer = $this->load_model('crioretailers');
        //   $retailerAuthData = $retailer->check_login();
        // retailerAuthData contains an array if user exist and false if no user exist   
        //   if(is_object($retailerAuthData)){
        // here if needed i can write code to unable users to enter the site 
        // if theyy dont have an account if no acc then simply redirect the control to the login page
        //      $data['retailerAuthData'] = $retailerAuthData;
        //   }
        $productId = esc($id);
        $db = Database::newInstance();
        $product = $db->read("SELECT * FROM products WHERE id = :id LIMIT 1", ['id' => $productId]);

        if ($product) {
            $productDetails = $product[0];
            // if cart is not created we create a Cart
            if (isset($_SESSION['CART'])) { // if the cart is their 
                // see if the product is added to the card or not
                $idsInCart = array_column($_SESSION['CART'], "id");
                if (in_array($productDetails->id, $idsInCart)) { // if the same product is there then we increase the qty
                    $productsKey = array_search($productDetails->id, $idsInCart); //searching for the key of the specific product whoes qty we need to increase
                    $_SESSION['CART'][$productsKey]['qty']++; //increasing the qty by 1 
                } else { //product is not in the cart we do this below
                    $singleProduct = array();
                    $singleProduct['id'] = $productDetails->id;
                    $singleProduct['qty'] = 1;
                    $_SESSION['CART'][] = $singleProduct;
                }
            } else {
                // if the cart doesnt exists then we are doing this creating the session cart
                // fetching the product details and adding it to an assoc array called singleProduct 
                // adding the id of the pproduct and the qty
                // then adding it to the cart which is in the session variable 
                $singleProduct = array();
                $singleProduct['id'] = $productDetails->id;
                $singleProduct['qty'] = 1;
                $_SESSION['CART'][] = $singleProduct;
            }
            $this->redirect();
        }
        // header("Location: ". ROOT . 'allProducts');
    }
    public function addQtyCart($id = '')
    {
        $this->set_redirectTo();
        // reference point is video  #97
        $this->redirect();
    }
    public function subQtyCart($id = '')
    {
        $this->set_redirectTo();
        $this->redirect();
    }
    public function removeItemCart($id = '')
    {
        $this->set_redirectTo();
        $id = esc($id);
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $singleCartProduct => $productDetails) {
                # code...
                if ($productDetails['id'] == $id) {
                    unset($_SESSION['CART'][$singleCartProduct]); // after unsetting a specific key there will be a gap so to reaarange the array without any gap
                    $_SESSION['CART'] = array_values($_SESSION['CART']);// array_values() is used and assigned again to the session so we retain the other values this time in proper order

                    break;
                }
            }
        }
        $this->redirect();
    }
    private function redirect(){
        header("Location:". $this->redirectTo);
    }
    private function set_redirectTo(){
      if (isset( $_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!='') {
        $this->redirectTo = $_SERVER['HTTP_REFERER'];
      }else{
        $this->redirectTo = ROOT."shop";
      }
    }
}
