<?php
 
class BarangController extends BaseController {
 
    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
 
    public function __construct(){
        $this->barang = new Barang();
    }
 
    protected function index()
    {
        return View::make('dashboard');
    }
 
}