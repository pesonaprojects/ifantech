<?php 
/**
  * 
  */
class Server extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function data_server()
	{
		$data=$this->m_data->server_list();
		echo json_encode($data);
	}
	public function load_server()
	{
		$id=$this->input->post('id');
		$GetServer = $this->db->get_where('i_server', ['id' => $id])->row_array();
		if ($id != NULL) { ?>
			<div class="card h-100">
				<div class="card-header">
					<center><h3 class="card-title mb-2">Server Detail <span style="color: red"><?=$GetServer['name']?></span></h3></center>
				</div>
				<div class="card-body">
					<table class="table table-borderless">
						<tbody class="table-border-bottom-0">
							<tr>
								<td>Server Name</td>
								<td><?=$GetServer['name']?></td>
							</tr>
							<tr>
								<td>Host</td>
								<td><?=$GetServer['host']?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<?php }
	}
	public function add_server()
	{
		$name = $this->input->post('name');
		$host = $this->input->post('host');
		$data = [
			'name' => $name,
			'host' => $host
		];
		$this->m_data->SaveServer($data);
		echo json_encode($data);
	}
} ?>