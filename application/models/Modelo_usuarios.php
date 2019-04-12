<?php

class Modelo_usuarios extends CI_Model{
    //FUNCIÓN DONDE MUESTRA LOS DATOS DEL USUARIO POR ID
    public function traerdatosUsuario($idusuarios)
    {
        $this->db->select('idusuarios,nombre,apellidos,telefono,usuario,tipo_usuario,fk_grupou');
        $this->db->where('idusuarios',$idusuarios);
        $data=$this->db->get('usuarios');
        return $data->result();
    } 
    public function traerdatosUsuariosAdmin($idusuarios)
    {
        $this->db->select('idusuarios,nombre,apellidos,telefono,usuario,tipo_usuario,fk_grupou');
        $this->db->where('idusuarios',$idusuarios);
        $data=$this->db->get('usuarios_grupo');
        return $data->result();
    } 
    public function nombreGrupo($idusuarios)
    {
        $this->db->where('',$idusuarios);
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    //VISTA DONDE TRAE TODOS LOS NOMBRES DE LOS GRUPOS
    public function grupos()
    {
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    public function grupostodos()
    {
        $this->db->distinct('grupo');
        $this->db->where('fk_grupou',1);
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    public function n_grupos()
    {
        $this->db->distinct('grupo');
        $this->db->where_not_in('idgrupo', 1);
        $data=$this->db->get('grupo');
        return $data->result();
    }
    //FUNCIÓN PARA INSERTAR LOS NUEVOS USUARIOS EN LA BD
    public function registrarUsuarios($d)
    {
        $query = $d['usuario'];
        $this->db->where('usuario',$query);
        $validar=$this->db->get('usuarios');
        if($validar->num_rows()>0){
            return false;
         } else {
            $count=$this->db->insert('usuarios',$d);        
            return true;
         }
    }
    public function usuario_grupo($fk_grupou)
    {
        $this->db->where('fk_grupou',$fk_grupou);
        $this->db->where_not_in('tipo_usuario','SU');
        $this->db->where_not_in("usuario",$this->session->userdata("usuario"));
        $this->db->order_by("tipo_usuario", "asc"); 
        $data=$this->db->get('usuarios_grupo');
        return $data->result();
    }
    function getUsuarios()
    {
        $this->db->select(); 
        $this->db->from('usuarios_grupo'); 
        $this->db->order_by("grupo", "asc"); 
        $this->db->order_by("tipo_usuario", "asc"); 
        $this->db->where_not_in("usuario",$this->session->userdata("usuario"));
        $query = $this->db->get();
        return $query->result();
    }
    public function getGrupo_admin($idusuario)
    {
        $this->db->where('idgrupo',$idusuario);
        $data=$this->db->get('grupo');
        return $data->result();
    }
    //ACTUALIZAR DATOS
    public function updateUsuarios($array,$idusuario)
    {
        $query = $array['usuario'];
        $this->db->where('usuario',$query);
        $this->db->where_not_in('idusuarios',$idusuario);
        $validar=$this->db->get('usuarios');
        if($validar->num_rows()>0){ 
            return false;
        } else {
            $this->db->where('idusuarios',$idusuario);
            $this->db->update('usuarios', $array);
            return true;
        }
    }
    public function EliminardatosUsuario($idusuario)
    {
        $this->db->where('idusuarios', $idusuario);
        $this->db->delete('usuarios');
    }
    public function getContactos($id)
    {
        $this->db->select('nombre,apellidos,telefono,usuario');
        $this->db->from('usuarios');
        $this->db->where('idusuarios',$id);
        $query=$this->db->get();
        return $query->result();
    }
    public function count_all()
	{
		$this->db->from('usuarios');
		return $this->db->count_all_results();
    }
    function count_filtered(){
		$query = $this->db->get('usuarios');
		return $query->num_rows();
    }
    public function getGrupos()
    {
        $this->db->select('idgrupo,nombre');
        $this->db->from('grupo');
        $this->db->where_not_in('idgrupo','1');
        $query=$this->db->get();
        return $query->result();
    }
    public function getGrupo($ig)
    {
        $this->db->select('idgrupo,nombre');
        $this->db->from('grupo');
        $this->db->where_not_in('idgrupo','1');
        $this->db->where('idgrupo',$ig);
        $query=$this->db->get();
        return $query->result();
    }
    public function regTkn($tk,$iu,$tt)
    {
        $d = array(
            'tkn' => $tk,
            'fkusuarios' => $iu,
            'status' => '0',
            'typetkn' => $tt
        );
        $this->db->where('tkn',$tk);
        $validar=$this->db->get('tkns');
        if($validar->num_rows()>0){
            return false;
        } else {
            $this->db->insert('tkns',$d);        
            return true;
        }
    }
    public function delTkUS($iu,$it)
    {
        $this->db->where('id', $it);
        $this->db->delete('tkns');
        $this->db->where('idusuarios', $iu);
        $this->db->delete('usuarios');
    }
    public function delTk($it)
    {
        $this->db->where('id', $it);
        $this->db->delete('tkns');
    }
    public function UpdPass($id,$npw)
    {
        $this->db->set('pass',$npw);
        $this->db->where('idusuarios',$id);
        if($this->db->update('usuarios')){
            return true;
        } else {
            return false;
        }
    }
    /*--------------------------------DATA TABLE------------------------------*/
    function getUsers($postData=null){

        $response = array();
   
        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value
   
        ## Search 
        $searchQuery = "";
        if($searchValue != ''){
           $searchQuery = " (nombre like '%".$searchValue."%' or apellidos like '%".$searchValue."%' or grupo like'%".$searchValue."%' or tipo_usuario like'%".$searchValue."%' ) ";
        }
   
        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('usuarios_grupo')->result();
        $totalRecords = $records[0]->allcount;
   
        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if($searchValue != '')
           $this->db->where($searchQuery);
        $records = $this->db->get('usuarios_grupo')->result();
        $totalRecordwithFilter = $records[0]->allcount;
   
        ## Fetch records
        $this->db->select('*');
        if($searchValue != '')
           $this->db->where($searchQuery);
           $this->db->where_not_in("usuario",$this->session->userdata("usuario"));
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('usuarios_grupo')->result();
   
        $data = array();
   
        foreach($records as $record ){

            if($record->tipo_usuario=='SU'){
                $rol='SUPER ADMINISTRADOR';
            }
            if($record->tipo_usuario=='AD'){
                $rol="ADMINISTRADOR";
            }
            if($record->tipo_usuario=='CO'){
                $rol='CONSULTOR';
            }

   
           $data[] = array( 
              "nombre"=>$record->nombre,
              "apellidos"=>$record->apellidos,
              "usuario"=>$record->usuario,
              "tipo_usuario"=>$rol,
              "grupo"=>$record->grupo,
              "actions"=>'<td class="footable-editing footable-last-visible" style="display: table-cell;">
              <div class="btn-group btn-group-xs" role="group">
                  <a href="javascript:void(0)" onclick="editreg('.$record->idusuarios.');" class="btn btn-secondary txt-azul" title="Editar Modal">
                      <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:void(0)" onclick="delreg('.$record->idusuarios.');" class="btn btn-secondary txt-rojo" title="Eliminar">
                      <span class="mdi mdi-delete" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:void(0)" onclick="getContacts('.$record->idusuarios.');" class="btn btn-secondary txt-verde" title="Contactos">
                      <span class="mdi mdi-eye" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:void(0)" onclick="updPass('.$record->idusuarios.');" class="btn btn-secondary txt-negro" title="Cambiar Contraseña">
                      <span class="mdi mdi-lock" aria-hidden="true"></span>
                  </a>
              </div>
            </td>',
           ); 
        }
   
        ## Response
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecordwithFilter,
           "iTotalDisplayRecords" => $totalRecords,
           "aaData" => $data
        );
   
        return $response; 
      }   
}
?>
