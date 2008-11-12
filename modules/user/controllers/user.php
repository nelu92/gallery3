<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2008 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class User_Controller extends REST_Controller {
  protected $resource_type = "user";

  /**
   * @see Rest_Controller::_get($resource)
   */
  public function _get($user) {
    $template = new View("user_registration.html");

    // @todo: this needs to be data-driven
    $theme = new Theme("default", $template);

    $template->set_global('user', Session::instance()->get('user', null));

    print $template->render();
  }

  /**
   *  @see Rest_Controller::_put($resource)
   */
  public function _put($resource) {
    throw new Exception("@todo User_Controller::_put NOT IMPLEMENTED");
  }

  /**
   *  @see Rest_Controller::_post($resource)
   */
  public function _post($resource) {
    throw new Exception("@todo User_Controller::_post NOT IMPLEMENTED");
  }

  /**
   *  @see Rest_Controller::_delete($resource)
   */
  public function _delete($resource) {
    throw new Exception("@todo User_Controller::_delete NOT IMPLEMENTED");
  }
}