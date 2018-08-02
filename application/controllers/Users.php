 <?php

  if (!defined('BASEPATH')) exit('No direct script access allowed');

  class Users extends CI_Controller {

      public function __construct() {
          parent::__construct();
          $this->load->model('users');
      }

      public function index($page = 1) {
          $users = Users::all();
          d($users);
          /*foreach ($users as $user) {
              echo '<li>' . $user->username . '</li>';
              echo '<li>' . $user->password . '</li>';
              echo '<li>' . $user->email . '</li>';
          }
          echo '</ul>';*/
      }

  }