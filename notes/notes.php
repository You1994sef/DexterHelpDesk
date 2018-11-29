//CONTROLLERS/USER.PHP


// public function show($user_id){
// 	// THIS WAY IS MANUALLY LOADING THE MODEL
// 	// $this->load->model('user_model');
// 	$data['results'] = $this->user_model->get_users($user_id,'Mike');

	

// 	$this->load->view('user_view', $data);

// 	// foreach ($result as $object) {

// 	// 	echo $object->username . "<br>" ;
// 	// }

// }
// public function insert(){

// 	$username = 'Gunner';
// 	$password = 'secret';


// 	$this->user_model->create_users([

// 		'username' => $username,
// 		'password' => $password




// 	]);



// }

// public function update(){

// 	$id = 3;

// 	$username = 'Leo';
// 	$password = 'Not Secret';


// 	$this->user_model->update_users([

// 		'username' => $username,
// 		'password' => $password
// 	], $id);



// }

// public function delete(){
// 	$id= 3;

// 	$this->user_model->delete_users($id);
// }







//MODELS/USER_MODEL


	// public function get_users($user_id,$username){

		// $this->db->where([


		// 	'id'=>$user_id,
		// 	'username'=>$username

		// ]);

		

		// $query = $this->db->get('users'); //THE 'USERS' IS USER TABLE IN OUR DATABASE

		// return $query->result();


		// $this->db->where('id',$user_id);


//  $this->db->get('users'); is equal to mysqli_query($connection, "select * from users");
	
//THIS IS THE MANUALL WAY TO CONNECT THE DATABASE
		// $config['hostname'] = 'localhost';
		// $config['username'] = 'root';
		// $config['password'] = '';
		// $config['database'] = 'errand_db';

		// $connection = $this->load->database(config);
// THIS IS IF WE HAVE SECOND CONNECTION
		// $config_2['hostname'] = 'localhost';
		// $config_2['username'] = 'root';
		// $config_2['password'] = '';
		// $config_2['database'] = 'errand_db';

		// $connection_2 = $this->load->database(config_2);


	// }

	// public function create_users($data){

	// 	$this->db->insert('users', $data);
	// }

	// public function update_users($data,$id){

	// 	$this->db->where(['id'=>$id]);
	// 	$this->db->update('users', $data);
	// }

	// public function delete_users($id){

	// 	$this->db->where(['id'=>$id]);
	// 	$this->db->delete('users');
	// }