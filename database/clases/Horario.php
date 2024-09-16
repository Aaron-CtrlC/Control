<?php 
  
class Horario {
   private string $turno;   

   /**
    * Get the value of turno
    */
   public function getTurno(): string
   {
      return $this->turno;
   }

   /**
    * Set the value of turno
    */
   public function setTurno(string $turno): self
   {
      $this->turno = $turno;

      return $this;
   }
}

?>