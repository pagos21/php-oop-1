
<?php
  /**
   * Classe per Users
   */
  class Users{
    public $real_name;
    public $nick;
    public $dob;
    public $pass;
    function __construct($real_name, $nick ,$dob, $pass)
    {
      $this-> real_name = $real_name;
      $this-> nick = $nick;
      $this-> dob = $dob;
      $this-> pass = $pass;
    }
    public function __toString(){
      $pattern = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!\\\\@$(=)\[\]|%\^_&\*\/-]).{8,}$/'; // regex per cercare se la pass contien almento ALFA NUM SPECIAL UPPER Char MIN 8
      $str = "Howdy! ";
      if ($this -> nick

      // ##### Scommentare riga sotto per testare anche le RegEx #####

      // && preg_match($pattern, $this-> pass)

      ) {
        $str .= $this-> nick ."<br>"
        ."Great Pass!!!<br><br><br>";
      }
      else {
        $str .= "Weak Pass or NO nick-name provided<br>"
        ."Maybe you should change your password policies, " . $this -> real_name . "!!!<br><br><br>";
      }
      return $str;
    }
  }

  $user1 = New Users("Homer", "Barone_Birra", '21/03/1956', 'popW/\456@78' );
  $user2 = New Users("Lionel", "", '02/05/1970', '123');
  $user3 = New Users("Barney", "King_Plow", '22/09/1956', 'notaverystrongpassword');


  echo $user1;
  echo $user2;
  echo $user3;


 ?>
