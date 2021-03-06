    <?php

class Modelo_equipos extends CI_Model{
    //función para traer los datos de los equipos por ID
    public function equipos($idequipo){
        $this->db->where('idequipos', $idequipo);
        $data=$this->db->get('equipos');
        return $data->result();
    }
    public function getEquipos($idgrupo){
        $this->db->where('fk_grupo', $idgrupo);
        $data=$this->db->get('grupo_equipos');
        return $data->result();
    }
    public function getEquiposAdmin($grupo){
        $this->db->where('fk_grupo', $grupo);
        $data=$this->db->get('grupo_equipos');
        return $data->result();
    }
    public function registrarEquipos($array){
        $query = $array['dns'];
        $this->db->where('dns',$query);
        $validar=$this->db->get('equipos');
        if($validar->num_rows()>0){
            return false;
        }else{
            $count=$this->db->insert('equipos',$array);        
            return true;
        }
    }
    public function updateEquipo($array,$idequipo){
        $this->db->where('idequipos',$idequipo);
        $this->db->update('equipos', $array);
        return true;
    }
    public function delEquipo($id)
    {
        $this->db->where('idequipos',$id);
        $this->db->delete('equipos');
    }
    public function getFrame($frm)
    {
        $this->db->select('iframe,fk_grupo,nombre_host');
        $this->db->where('idequipos',$frm);
        $this->db->from('equipos');
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    public function getFrameG($frm,$grp)
    {
        $this->db->select('iframe,fk_grupo,nombre_host');
        $this->db->where('idequipos',$frm);
        $this->db->where('fk_grupo',$grp);
        $this->db->from('equipos');
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
}

?>