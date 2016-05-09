<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		$this->db->reconnect();

		$query = $this->db->get('guru');

		return $query;
	}

	public function search_by_name ($name)
	{
		$this->db->reconnect();

		$this->db->where('nama', $name);
		$query = $this->db->get('guru');

		return $query;
	}

	public function search_by_id ($nik)
	{
		$this->db->reconnect();

		$this->db->where('nik', $nik);
		$query = $this->db->get('guru');

		return $query;
	}

	/*	Uses $_POST:
	 *		['nik'] fills the new record's 'nik'
	 *		['name'] fills the new record's 'nama'
	 */
	public function insert ()
	{
		$this->db->reconnect();

		$this->db->set ('nik', $this->input->post('nik'));
		$this->db->set ('nama', $this->input->post('nama'));

		$this->db->insert ('guru');
	}

	/*	Uses $_POST:
	 *		['original_nik'] used to point which record will be changed
	 *		['new_nik'] will fill the record's 'nik' . By default should have the same value as 'originalNik'
	 *		['nama'] will fill the record's 'nama'
	 */
	public function update ()
	{
		$this->db->reconnect();

		$this->db->where ('nik', $this->input->post('original_nik'));

		$this->db->set ('nik', $this->input->post('new_nik'));
		$this->db->set ('nama', $this->input->post('nama'));

		$this->db->replace ('guru');
	}

	//	Uses NIK (id) as keyfinder
	public function delete ($nik)
	{
		$this->db->reconnect();

		$this->db->where('nik', $nik);

		$this->db->delete('guru');
	}
}