<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([[
            'name'         => 'api.school.list',
            'display_name' => '园区列表',
            'description'  => '园区列表',
        ], [
            'name'         => 'api.school.create',
            'display_name' => '添加园区',
            'description'  => '添加园区',
        ], [
            'name'         => 'api.school.show',
            'display_name' => '点击查看单个幼儿园的信息',
            'description'  => '点击查看单个幼儿园的信息',
        ], [
            'name'         => 'api.school.edit.id',
            'display_name' => '点击获取要修改的幼儿园信息',
            'description'  => '点击获取要修改的幼儿园信息',
        ], [
            'name'         => 'api.school.update',
            'display_name' => '修改幼儿园的信息',
            'description'  => '修改幼儿园的信息',
        ], [
            'name'         => 'api.school.delete',
            'display_name' => '删除幼儿园',
            'description'  => '删除幼儿园',
        ], [
            'name'         => 'api.school.getclass',
            'display_name' => '每个学校下的班级信息',
            'description'  => '每个学校下的班级信息',
        ], [
            'name'         => 'api.admin.store',
            'display_name' => '添加玺越后台账号',
            'description'  => '添加玺越后台账号',
        ], [
            'name'         => 'api.admin.adminList',
            'display_name' => '玺越管理员列表',
            'description'  => '玺越管理员列表',
        ], [
            'name'         => 'api.admin.editInfo',
            'display_name' => '得到要修改账号的信息',
            'description'  => '得到要修改账号的信息',
        ], [
            'name'         => 'api.admin.editPassword',
            'display_name' => '修改玺越账号密码',
            'description'  => '修改玺越账号密码',
        ], [
            'name'         => 'api.rbac.store',
            'display_name' => '添加角色和权限',
            'description'  => '添加角色和权限',
        ], [
            'name'         => 'api.rbac.destroy',
            'display_name' => '删除角色',
            'description'  => '删除角色',
        ], [
            'name'         => 'api.rbac.update',
            'display_name' => '给角色修改权限',
            'description'  => '给角色修改权限',
        ], [
            'name'         => 'api.rbac.edit',
            'display_name' => '获取要编辑的角色的信息',
            'description'  => '获取要编辑的角色的信息',
        ], [
            'name'         => 'api.rbac.add.permission',
            'display_name' => '添加权限',
            'description'  => '添加权限',
        ], [
            'name'         => 'api.rbac.permissions',
            'display_name' => '获取所有的权限列表',
            'description'  => '获取所有的权限列表',
        ], [
            'name'         => 'api.rbac.roleList',
            'display_name' => '角色列表',
            'description'  => '角色列表',
        ], [
            'name'         => 'api.principal.list',
            'display_name' => '园长列表',
            'description'  => '园长列表',
        ], [
            'name'         => 'api.principal.store',
            'display_name' => '添加园长',
            'description'  => '添加园长',
        ], [
            'name'         => 'api.principal.update',
            'display_name' => '修改园长密码',
            'description'  => '修改园长密码',
        ], [
            'name'         => 'api.principal.edit.info',
            'display_name' => '修改园长信息详情',
            'description'  => '修改园长信息详情',
        ], [
            'name'         => 'api.banner.addBannerPosition',
            'display_name' => '添加广告位',
            'description'  => '添加广告位',
        ], [
            'name'         => 'api.banner.bannerPositionList',
            'display_name' => '广告位列表',
            'description'  => '广告位列表',
        ], [
            'name'         => 'api.banner.addBanner',
            'display_name' => '添加广告',
            'description'  => '添加广告',
        ], [
            'name'         => 'api.banner.delBanner',
            'display_name' => '删除广告',
            'description'  => '删除广告',
        ], [
            'name'         => 'api.banner.editBannerInfo',
            'display_name' => '修改广告的数据详情',
            'description'  => '修改广告的数据详情',
        ], [
            'name'         => 'api.banner.updateBanner',
            'display_name' => '修改广告',
            'description'  => '修改广告',
        ], [
            'name'         => 'api.banner.bannerList',
            'display_name' => '广告列表',
            'description'  => '广告列表',
        ], [
            'name'         => 'api.message.store',
            'display_name' => '添加公告',
            'description'  => '添加公告',
        ], [
            'name'         => 'api.message.destory',
            'display_name' => '删除公告',
            'description'  => '删除公告',
        ], [
            'name'         => 'api.message.show',
            'display_name' => '查看公告',
            'description'  => '查看公告',
        ], [
            'name'         => 'api.message.index',
            'display_name' => '公告列表',
            'description'  => '公告列表',
        ], [
            'name'         => 'api.teacher.list',
            'display_name' => '老师列表',
            'description'  => '老师列表',
        ], [
            'name'         => 'api.teacher.info',
            'display_name' => '查看老师',
            'description'  => '查看老师',
        ], [
            'name'         => 'api.teacher.studentInfo',
            'display_name' => '查看老师下方的学生信息',
            'description'  => '查看老师下方的学生信息',
        ], [
            'name'         => 'api.student.list',
            'display_name' => '学生列表',
            'description'  => '学生列表',
        ], [
            'name'         => 'api.student.info',
            'display_name' => '查看学生',
            'description'  => '查看学生',
        ], [
            'name'         => 'api.parent.list',
            'display_name' => '家长列表',
            'description'  => '家长列表',
        ], [
            'name'         => 'api.parent.info',
            'display_name' => '查看家长',
            'description'  => '查看家长',
        ]]);
    }
}
