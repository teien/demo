<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Auth\Permission;

use Encore\Admin\Facades\Admin;
class AdminOrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';





    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());




        $grid->column('id', __('Id'))->sortable();
        $grid->column('user_id', __('Id Khách hàng'));
        $grid->column('fullname', __('Tên khách hàng'));
        $grid->column('address', __('Địa chỉ'))->sortable();
        $grid->column('phone', __('SĐT'))->sortable();
        $grid->column('email', __('Email'))->sortable();
        $grid->column('amount', __('Tổng tiền'))->sortable()->display(function ($price) {
            return number_format($price, 0, ',', '.');
        });
        $grid->column('status', __('Status'))->display(function ($status) {
            switch ($status) {
                case 0:
                    return '<span class="label label-danger">Thất bại</span>';
                case 1:
                    return '<span class="label label-warning">Đang giao</span>';
                case 2:
                    return '<span class="label label-success">Đã giao</span>';
                default:
                    return '';
            }
        })->sortable();

        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter){
            $filter->like('id', 'Mã đơn hàng');
            $filter->like('fullname', 'Tên khách hàng');
            $filter->like('phone', 'Số điện thoại');
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('Id Khách hàng'));
        $show->field('fullname', __('Fullname'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('amount', __('Amount'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());
        $form->text('user_id', __('Id Khách hàng'))->readonly();
        $form->text('fullname', __('Fullname'));
        $form->text('address', __('Address'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->number('amount', __('Amount'));
        $form->number('status', __('Status'));

        return $form;
    }


}
