<?php 
  class Quote extends Database{
    public function index(){
      try{
        $this->query('SELECT * FROM quotes ORDER BY create_date DESC');
        $i = 0;
        while($rows = $this->resultSet()){
          if($i < count($rows)){
            yield $rows[$i];
            $i++;
          } else {
            return count($rows). ' Quotes Listed';
          }
        }
      } catch(Throwable $e){
        echo '<div class="alert alert-danger">'.get_class($e).' on line '.$e->getLine().' of '.$e->getFile().': '.$e->getMessage().'</div>';
      }
    }
  }