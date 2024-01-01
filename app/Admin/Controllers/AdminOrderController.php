<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
        $grid->column('fullname', __('Fullname'));
        $grid->column('address', __('Address'))->sortable();
        $grid->column('phone', __('Phone'))->sortable();
        $grid->column('email', __('Email'))->sortable();
        $grid->column('amount', __('Amount'))->sortable();
        $grid->column('status', __('Status'))->sortable();
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

        $form->text('fullname', __('Fullname'));
        $form->text('address', __('Address'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->number('amount', __('Amount'));
        $form->number('status', __('Status'));

        return $form;
    }
}
