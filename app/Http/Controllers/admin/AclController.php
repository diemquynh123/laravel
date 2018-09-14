<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\AddPermissRequest;
use App\Http\Requests\EditPermissRequest;
use App\Http\Requests\AddRoleRequest;
use App\Http\Requests\EditRoleRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\AddUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Permission;
use App\Models\Roles;
use App\User;
use App\Models\RoleUsers;
use App\Models\RolesPermission;
class AclController extends Controller
{
    //
     public function getPermission(){  
         $this->authorize('permission_list');    
         $data['items']=Permission::all();
            return view('admin.permission',$data);
        }
        public function getEditPermission($id){
            $this->authorize('editpermission'); 
        	$data['permission'] = Permission::find($id);
        	return view('admin.editPermission',$data);
        }

        public function postEditPermission(EditPermissRequest $request){
            $this->authorize('posteditpermission');
        	$permiss = Permission::find($request->id);
        	$permiss->title = $request->name;
        	$permiss->url = $request ->urlname;
        	$permiss->save();
        	return redirect()->route('permission_list');    
        }	

        public function getAddPermission(){
            $this->authorize('addpermission');
        	return view('admin.addPermission');

        }
        public function postAddPermission(AddPermissRequest $request){
            $this->authorize('addpermission');
        	$permission = new Permission();
        	$permission->title = $request->name;
        	$permission->url = $request->urlname;
        	$permission->save();
        	return redirect()->route('permission_list');
        }

        public function DeletePermission($id){
            $this->authorize('deletepermission');
        	Permission::destroy($id);
        	return redirect()->route('permission_list');
        }


         public function getRole(){  
         $this->authorize('role_list');    
         $data['roles']=Roles::all();
            return view('admin.role',$data);
        }


        public function getEditRole($id){
            $this->authorize('editrole');
        	$data['permission'] = Permission::all();
        	$data['role'] = Roles::find($id);
        	return view('admin.editRole',$data);
        }

        public function postEditRole(EditRoleRequest $request){
            $this->authorize('postEditrole');
        	$role = Roles::find($request->id);
        	RolesPermission::where('roles_id', $request->id)->delete(); 
        	$permis = explode(',',$request->permissid);
        	foreach($permis as $per) {        		
    			$permiss = new RolesPermission();
				$permiss->permission_id = $per;
				$permiss->roles_id = $request->id;
				$permiss->save();
        	}
        	$role->title = $request->name;
        	$role->save();      	
        	return redirect()->route('role_list');

        }

        public function getAddRole(){
            $this->authorize('addrole');
        	$data['permissions'] = Permission::all();
        	return view('admin.addRole',$data);

        }
        public function postAddRole(AddRoleRequest $request){
            $this->authorize('postaddrole');
        	$role = new Roles();
        	
        	$role->title = $request->name;
        	$role->save();  

        	$permis = explode(',',$request->permissid);
        	foreach($permis as $per) {        		
    			$permiss = new RolesPermission();
				$permiss->permission_id = $per;
				$permiss->roles_id = $role->id;
				$permiss->save();
        	}
        	    	
        	return redirect()->route('role_list');
        }

        public function DeleteRole($id){
            $this->authorize('deleterole');
        	Roles::destroy($id);
        	return redirect()->route('role_list');
        }


        /////
         public function getUser(){  
            $this->authorize('user_list');
            $data['users']=User::all();
            return view('admin.user',$data);
        }
        
        public function getphoneUser($id){
            $data['phone'] = User::find($id);
            return view('admin.phone',$data);
        }

        public function getEditUser($id){
            $this->authorize('edituser');
        	$data['role'] = Roles::all();
        	$data['user'] = User::find($id);
        	return view('admin.editUser',$data);
        }

        public function postEditUser(EditUserRequest $request){
            $this->authorize('postEdituser');
        	$user = User::find($request->id);
        	RoleUsers::where('user_id', $request->id)->delete(); 
        	$roles = explode(',',$request->roleid);
        	foreach($roles as $role) {        		
    			$rol = new RoleUsers();
				$rol->roles_id = $role;
				$rol->user_id = $request->id;
				$rol->save();
        	}
        	$user->name =$request->name;
        	$user->email =$request->email;
        	$user->password =bcrypt($request->pass);
        	$user->save();

        	return redirect()->route('user_list');

        }

        public function getAddUser(){
            $this->authorize('adduser');
        	$data['role'] = Roles::all();
        	return view('admin.addUser',$data);

        }
        public function postAddUser(AddUserRequest $request){
            $this->authorize('postadduser');
        	$user = new User();       	
        	$user->name =$request->name;
        	$user->email =$request->email;
        	$user->password =bcrypt($request->pass);
        	$user->save();  

        	$roles = explode(',',$request->roleid);
        	foreach($roles as $role) {        		
    			$rol = new RoleUsers();
				$rol->roles_id = $role;
				$rol->user_id = $user->id;
				$rol->save();
        	}
        	    	
        	return redirect()->route('user_list');
        }

        public function DeleteUser($id){
            $this->authorize('deleteuser');
        	User::destroy($id);
        	return redirect()->route('user_list');
        }



}
