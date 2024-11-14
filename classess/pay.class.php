<?php 
// Without an interface, you might have one large Login class with conditional logic (e.g., if statements) to handle different types of users, like regular users and admins. This could look something like:

// class Login {
//     public function login($username, $password, $userType) {
//         if ($userType == 'admin') {
//             // Admin login logic
//         } else {
//             // Regular user login logic
//         }
//     }

//     public function logout($userType) {
//         // Similar conditional logic for logging out
//     }
// }

interface PaymentInterface {
    public function paynow();
    
}
interface LoginInterface{
    public function loginFirst();
    
}

class Paypal implements PaymentInterface, LoginInterface{
    public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    
}

class Visa implements PaymentInterface{
    public function payNow() {}
    public function paymentProcess(){
        
        $this->payNow();
    }
}
class Cash implements PaymentInterface{
    public function payNow() {}
    public function paymentProcess(){
       
        $this->payNow();
    }
} 
class BuyProducts{
    public function payNow(PaymentInterface $paymentType){
        $paymentType->payNow();
    }
}

$payment=new Cash();
$buyProduct=new BuyProducts();
$paymentTyoe=new Paypal();
$buyProduct->pay($paymentType);

?>