<?php

namespace App\Admin\Controllers;

use App\Models\Coupons;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdminCouponsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Coupons';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coupons());

        $grid->column('id', __('Id'));
        $grid->column('coupon_code', __('Coupon code'));
        $grid->column('discount_amount', __('Discount amount'));
        $grid->column('expiration_date', __('Expiration date'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Coupons::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('coupon_code', __('Coupon code'));
        $show->field('discount_amount', __('Discount amount'));
        $show->field('expiration_date', __('Expiration date'));
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
        $form = new Form(new Coupons());

        $form->text('coupon_code', __('Coupon code'));
        $form->decimal('discount_amount', __('Discount amount'));
        $form->date('expiration_date', __('Expiration date'))->default(date('Y-m-d'));

        return $form;
    }
}
