<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LovinoController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('about-us');
    }
    public function projects()
    {
        return view('projects');
    }
     public function sale()
    {
        return view('sale');
    }
     public function rent()
    {
        return view('blogs');
    }
    public function team()
    {
        return view('team');
    }
    public function career()
    {
        return view('career');
    }
    public function contact()
    {
        return view('contact');
    }
    public function founder()
    {
        return view('founder');
    }
    public function p1details()
    {
        return view('p1details');
    }
     public function p2details()
    {
        return view('p2details');
    }
       public function p3details()
    {
        return view('p3details');
    }
      public function p4details()
    {
        return view('p4details');
    }
    public function p5details()
    {
        return view('p5details');
    }
    public function p6details()
    {
        return view('p6details');
    }
     public function p7details()
    {
        return view('p7details');
    }
      public function p8details()
    {
        return view('p8details');
    }
      public function p9details()
    {
        return view('p9details');
    }
      public function p10details()
    {
        return view('p10details');
    }
      public function p11details()
    {
        return view('p11details');
    }
      public function p12details()
    {
        return view('p12details');
    }
    public function p13details()
    {
        return view('p13details');
    }
    public function p14details()
    {
        return view('p14details');
    }
    public function p15details()
    {
        return view('p15details');
    }
    public function p16details()
    {
        return view('p16details');
    }
      public function blogs()
    {
        return view('blog');
    }
     public function blogs1()
    {
        return view('blog1');
    }
     public function blogs2()
    {
        return view('blog2');
    }
    public function blogs3()
    {
        return view('blog3');
    }
     public function blogs4()
    {
        return view('blog4');
    }
     public function blogs5()
    {
        return view('blog5');
    }
    //method for commercial properties
    public function commercial_properties(){
        return view('/commercial/commercials');
    }
    public function commercial1(){
        return view('/commercial/commercials1');
    }
     public function commercial2(){
        return view('/commercial/commercials2');
    }
     public function commercial3(){
        return view('/commercial/commercials3');
    }
     public function commercial4(){
        return view('/commercial/commercials4');
    }
     public function commercial5(){
        return view('/commercial/commercials5');
    }
     public function commercial6(){
        return view('/commercial/commercials6');
    }


    //method for sale properties
    public function sale_properties(){
        return view('/sale/sales');
    }
    public function sale1_properties(){
        return view('/sale/sales1');
    }
      public function sale2_properties(){
        return view('/sale/sales2');
    }
     public function sale3_properties(){
        return view('/sale/sales3');
    }
      public function sale4_properties(){
        return view('/sale/sales4');
    }
     public function sale5_properties(){
        return view('/sale/sales5');
    }
      public function sale6_properties(){
        return view('/sale/sales6');
    }

    //method for apartments properties
    public function apartments_properties(){
        return view('/apartment/apartments');
    }
    public function apartments1(){
        return view('/apartment/apartments1');
    }
     public function apartments2(){
        return view('/apartment/apartments2');
    }
     public function apartments3(){
        return view('/apartment/apartments3');
    }
     public function apartments4(){
        return view('/apartment/apartments4');
    }
     public function apartments5(){
        return view('/apartment/apartments5');
    }
     public function apartments6(){
        return view('/apartment/apartments6');
    }

    
//method for rent properties
public function rent_properties(){
    return view('/rent/rents');
}
public function rent1(){
    return view('/rent/rents1');
}
public function rent2(){
    return view('/rent/rents2');
}
public function rent3(){
    return view('/rent/rents3');
}
public function rent4(){
    return view('/rent/rents4');
}
public function rent5(){
    return view('/rent/rents5');
}
public function rent6(){
    return view('/rent/rents6');
}


//method for offplan properties
public function offplan_properties(){
    return view('/offplan/offplans');
}
public function offplan1(){
    return view('/offplan/offplans1');
}
public function offplan2(){
    return view('/offplan/offplans2');
}
public function offplan3(){
    return view('/offplan/offplans3');
}
public function offplan4(){
    return view('/offplan/offplans4');
}
public function offplan5(){
    return view('/offplan/offplans5');
}
public function offplan6(){
    return view('/offplan/offplans6');
}

//method for office space properties
public function office_properties(){
    return view('/office/offices');
}
public function office1(){
    return view('/office/offices1');
}
public function office2(){
    return view('/office/offices2');
}
public function office3(){
    return view('/office/offices3');
}
public function office4(){
    return view('/office/offices4');
}
public function office5(){
    return view('/office/offices5');
}
public function office6(){
    return view('/office/offices6');
}


//method for super properties
public function super_properties(){
    return view('/super/supers');
}
public function super1(){
    return view('/super/supers1');
}
public function super2(){
    return view('/super/supers2');
}
public function super3(){
    return view('/super/supers3');
}
public function super4(){
    return view('/super/supers4');
}
public function super5(){
    return view('/super/supers5');
}
public function super6(){
    return view('/super/supers6');
}

//method for villa properties
public function villa_properties(){
    return view('/villa/villas');
}
public function villa1(){
    return view('/villa/villas1');
}
public function villa2(){
    return view('/villa/villas2');
}
public function villa3(){
    return view('/villa/villas3');
}
public function villa4(){
    return view('/villa/villas4');
}
public function villa5(){
    return view('/villa/villas5');
}
public function villa6(){
    return view('/villa/villas6');
}
public function buy_property(){
    return view('buy_property');
}

}


    
