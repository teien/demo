<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdminUserController extends AdminController
{
    protected $title = 'Users';

    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('ID'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        //$grid->column('', __('Address'));

        //$grid->column('password', __('Password'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {
            $filter->like('name', 'Name');
            $filter->like('Email', 'Email');
           // $filter->like('Phone', 'Phone');
        });
        $grid->column('total_amount', __('Total Amount'))->display(function () {
            $totalAmount = $this->orders()->sum('amount');
            return number_format($totalAmount, 0, ',', '.');
        });

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
       // $show->field('password', __('Password'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
{
    $form = new Form(new User());

    $form->text('name', __('Name'))->rules('required');
    $form->email('email', __('Email'))->rules('required|email|unique:users,email');;
    $form->password('password', __('Password'))/* ->rules('required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/') */;
    $form->saving(function (Form $form) {
        if ($form->password) {
            $form->password = bcrypt($form->password);
        } else {
            $user = User::find($form->model()->id);
            $form->password = $user->password;
        }
    });
    return $form;
}

}
