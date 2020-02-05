<?php
class human {
    public $names;
    public $address;
    public $contact;
    public $experience;
    public $ducation;
    public $skills;
    public $interest;
    public $award;
    public $reperences;
    public $profile;
    

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
    
    function set_address($address){
        $this->address = $address;
    }

    function get_address(){
        return $this->address;
    }


    public function set_contacts($contact){
        var_dump(123);
        die();
        $this->contact = $contact;
    }


    function get_contact(){
        return $this->contact;
    }


    function set_experience($experience){
        $this->experience = $experience;
    }

    function get_experience(){
        return $this->experience;
    }


    function set_education($education){
        $this->education = $education;
    }

    function get_education(){
        return $this->education;
    }


    function set_profile($profile){
        $this->profile = $profile;
    }
    function get_profile(){
        return $this->profile;
    }


    function set_skills($skills){
        $this->skills = $skills;
    }

    function get_skills(){
        return $this->skills;
    }

    
    function set_interest($interest){
        $this->interest = $interest;
    }

    function get_interest(){
        return $this->interest;
    }


    function set_award($award){
        $this->award = $award;
    }

    function get_award(){
        return $this->award;
    }


    function set_reperences($reperences){
        $this->reperences = $reperences;
    }

    function get_reperences(){
        return $this->reperences;
    }

} 
?>
