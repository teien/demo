<?php

namespace App\Admin\Controllers;

use App\Models\OrderDetails;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdminOrderDetailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OrderDetails';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderDetails());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('order_id', __('Order id'))->sortable();
        $grid->column('product_id', __('Product id'))->sortable();
        $grid->column('price', __('Price'))->sortable()->display(function ($price) {
            return number_format($price, 0, ',', '.');
        });

        $grid->column('quantity', __('Quantity'))->sortable();
        $grid->column('product.quantity', __('Product Quantity'))->sortable();
        $grid->column('fullname', __('Fullname'))->sortable();
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter){
            $filter->like('order_id', 'Mã đơn hàng');
            $filter->like('fullname', 'Tên khách hàng');
            $filter->like('product_id', 'Mã hàng');
        });
        $grid->actions(function ($actions) {

            $actions->disableDelete();

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
        $show = new Show(OrderDetails::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_id', __('Order id'));
        $show->field('product_id', __('Product id'));
        $show->field('price', __('Price'));
        $show->field('quantity', __('Quantity'));
        $show->field('fullname', __('Fullname'));
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
        $form = new Form(new OrderDetails());

        $form->text('order_id', __('Order id'));
        $form->number('product_id', __('Product id'));
        $form->decimal('price', __('Price'));
        $form->number('quantity', __('Quantity'));
        $form->text('fullname', __('Fullname'));
        $form->tools(function (Form\Tools $tools) {
            // Vô hiệu hóa công cụ cụ thể (ví dụ: Excel)
            $tools->disableDelete();

            // Hoặc vô hiệu hóa tất cả các công cụ

        });
        return $form;
    }
}
