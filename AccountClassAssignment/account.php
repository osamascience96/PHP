
<?php
class account
{

   protected $acctNum;
   protected $balance;
   protected $meth;
   protected $wdamount;


   public function __construct($acctNum, $balance)
   {
      $this->balance = $balance;
   }
   public function setAccountNumber($acctNum)
   {
      $this->acctNum = $acctNum;
   }
   public function getAccountNumber()
   {
      return $this->acctNum;
   }

   public function getAccountBalance()
   {
      return $this->balance;
   }

   public function withdraw($wdamount)
   {

      $this->wdamount = $wdamount;
      $acctNum = $this->getAccountNumber();

      if ($this->wdamount > $this->balance) {
         echo "Sorry your bank balance is less than your withdraw amount";
      } else {
         $totalbal = ($this->balance) - ($this->wdamount);
         echo "<div class='col'>";
         echo "Your Account Number: ", $acctNum;
         echo "</div>";
         echo "<div class='w-100'></div>";
         echo "<div class='col'>";
         echo "Your Previous Balance: ", $this->balance;
         echo "</div>";
         echo "<div class='w-100'></div>";
         echo "<div class='col'>";
         echo "Your Withdraw balance: ", $this->wdamount;
         echo "</div>";
         echo "<div class='w-100'></div>";
         echo "<div class='col'>";
         echo "Total Bank Balance: ", $totalbal;
         echo "</div>";
      }
   }

   public function deposite($wdamount)
   {
      $this->wdamount = $wdamount;
      $acctNum = $this->getAccountNumber();
      $totalbal = ($this->balance) + ($this->wdamount);
      echo "<div class='col'>";
      echo "Your Account No: ", $acctNum;
      echo "</div>";
      echo "<div class='w-100'></div>";
      echo "<div class='col'>";
      echo "Your Previous Balance: ", $this->balance;
      echo "</div>";
      echo "<div class='w-100'></div>";
      echo "<div class='col'>";
      echo "Your deposite balance: ", $this->wdamount;
      echo "</div>";
      echo "<div class='w-100'></div>";
      echo "<div class='col'>";
      echo "Total Bank Balance: ", $totalbal;
      echo "</div>";
      echo "<div class='w-100'></div>";
   }
}
?>
