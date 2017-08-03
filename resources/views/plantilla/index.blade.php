@extends('plantilla.principal')  {{-- Incluye la pagina principal --}}

{{-- Apartir de aqui agregar el contenido 
==================================================================--}}
@section('contenido')  {{-- Se llama Contenido porque en l apagina principla el @yield se llama Contenido --}}

	<div class="wrap">                    
	    <div class="head">
	        <div class="info">
	            <h1>Dashboard</h1>
	            <ul class="breadcrumb">
	                <li><a href="#">Home</a></li>
	                <li><a href="#">One more</a></li>
	                <li class="active">Dashboard</li>
	            </ul>
	        </div>
	        
	        <div class="search">
	            <form action="" method="post">
	                <input type="text" class="form-control" placeholder="search..."/>                                
	                <button type="submit"><span class="i-calendar"></span></button>
	                <button type="submit"><span class="i-magnifier"></span></button>
	            </form>
	        </div>                        
	    </div>                                                                    
	    
	    <div class="container">
	        
	        <div class="row">
	            <div class="col-md-12">
	                
	                <div class="block">
	                    <div class="head">
	                        <h2>Visitors</h2>
	                        <ul class="buttons">                                                                                      
	                            <li><a href="#" class="block_toggle"><span class="i-arrow-down-3"></span></a></li>
	                            <li><a href="#" class="block_remove"><span class="i-cancel-2"></span></a></li>
	                        </ul>
	                    </div>
	                    <div class="content">
	                        <div id="chart-dashboard" style="height: 200px; margin-top: 10px;"></div>
	                    </div>
	                    <div class="content np">
	                        <table cellpadding="0" cellspacing="0" width="100%">
	                            <thead>
	                                <tr>
	                                    <th>Date</th>
	                                    <th>New</th>
	                                    <th>Returned</th>
	                                    <th>Total</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>2014-06</td>
	                                    <td>1,432</td>
	                                    <td>442</td>
	                                    <td>1,874</td>
	                                </tr>
	                                <tr>
	                                    <td>2014-07</td>
	                                    <td>1,121</td>
	                                    <td>680</td>
	                                    <td>1,801</td>
	                                </tr>
	                                <tr>
	                                    <td>2014-08</td>
	                                    <td>738</td>
	                                    <td>435</td>
	                                    <td>1,173</td>
	                                </tr>
	                                <tr>
	                                    <td>2014-09</td>
	                                    <td>2,385</td>
	                                    <td>1,553</td>
	                                    <td>3,938</td>
	                                </tr>                                                                                                
	                                <tr>
	                                    <td>2014-10</td>
	                                    <td>2,127</td>
	                                    <td>1,301</td>
	                                    <td>3,428</td>
	                                </tr>                                                
	                                <tr>
	                                    <td>2014-11</td>
	                                    <td>1,432</td>
	                                    <td>819</td>
	                                    <td>2,251</td>
	                                </tr>                                                
	                            </tbody>                                            
	                        </table>
	                    </div>
	                </div>
	                
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-6">
	                <div class="block">
	                    <div class="head">
	                        <h2>Latest orders</h2>                                        
	                        <ul class="buttons">
	                            <li><a href="#" class="block_loading"><span class="i-cycle"></span></a></li>
	                            <li><a href="#" class="block_toggle"><span class="i-arrow-down-3"></span></a></li>
	                            <li><a href="#" class="block_remove"><span class="i-cancel-2"></span></a></li>
	                        </ul>                                        
	                        <div class="side fr">
	                            <span class="label label-danger">+2</span>
	                        </div>                                        
	                    </div>                                                                    
	                    <div class="content np">
	                        <table cellpadding="0" cellspacing="0" width="100%" class="list">
	                            <thead>
	                                <tr>
	                                    <th width="70">Date</th>
	                                    <th>Products</th>
	                                    <th width="40">Status</th>
	                                    <th width="50">Price</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td><span class="date">Nov 17</span><span class="time">12:35</span></td>
	                                    <td><a href="#">Order #15-223</a></td>
	                                    <td><span class="label label-danger">waiting</span></td>
	                                    <td><span class="price">$139.13</span></td>
	                                </tr>                                                 
	                                <tr>
	                                    <td><span class="date">Nov 15</span><span class="time">12:35</span></td>
	                                    <td><a href="#">Order #15-222</a></td>
	                                    <td><span class="label label-danger">waiting</span></td>
	                                    <td><span class="price">$678.00</span></td>
	                                </tr>                                                
	                                <tr>
	                                    <td><span class="date">Nov 14</span><span class="time">12:35</span></td>
	                                    <td><a href="#">Order #15-221</a></td>
	                                    <td><span class="label label-warning">delivering</span></td>
	                                    <td><span class="price">$400.12</span></td>
	                                </tr>
	                                <tr>
	                                    <td><span class="date">Nov 14</span><span class="time">18:42</span></td>
	                                    <td><a href="#">Order #15-220</a></td>
	                                    <td><span class="label label-success">done</span></td>
	                                    <td><span class="price">$800.00</span></td>
	                                </tr>
	                                <tr>
	                                    <td><span class="date">Nov 13</span><span class="time">8:21</span></td>
	                                    <td><a href="#">Order #15-219</a></td>
	                                    <td><span class="label label-success">done</span></td>
	                                    <td><span class="price">$879.24</span></td>
	                                </tr>                                                                                  
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <td colspan="4" align="right"><button class="btn btn-sm btn-primary">More...</button></td>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>                                                                        
	                </div>                                
	            </div>
	            <div class="col-md-6">
	                <div class="block">
	                    <div class="head">
	                        <h2>Stuff</h2>
	                        <div class="side fr">
	                            <div class="input-group" style="width: 150px;">
	                                <input type="text" placeholder="Search..." class="form-control "/>
	                                <div class="input-group-btn">
	                                    <button class="btn btn-default" type="button"><i class="i-magnifier"></i></button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="content list_custom npb npt">
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/dmitry_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">John Doe</a>
	                                <p class="muted">Developer</p>
	                            </div>
	                            <div class="status online"></div>
	                        </div>
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/olga_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">Olga Ivaniuk</a>
	                                <p class="muted">Manager</p>
	                            </div>
	                            <div class="status online"></div>
	                        </div>
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/alexey_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">Alex Kucher</a>
	                                <p class="muted">Manager</p>
	                            </div>
	                            <div class="status away"></div>
	                        </div>                                        
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/helen_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">Helen Symonchuk</a>
	                                <p class="muted">Customer</p>
	                            </div>
	                            <div class="status offline"></div>
	                        </div>
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/vasil_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">Dmitry Kvasha</a>
	                                <p class="muted">Developer</p>
	                            </div>
	                            <div class="status offline"></div>
	                        </div>                                         
	                        <div class="item">
	                            <div class="img">
	                                <img src="img/examples/users/valentin_m.jpg" class="img-thumbnail"/>
	                            </div>
	                            <div class="info">
	                                <a href="#" class="name">Valentin Ratushev</a>
	                                <p class="muted">Lawyer</p>
	                            </div>
	                            <div class="status offline"></div>
	                        </div>                                        
	                    </div>
	                    <div class="footer">
	                        <div class="side fr">
	                            <button class="btn btn-sm btn-primary">More...</button>
	                        </div>
	                    </div>
	                </div>                                
	            </div>                            
	        </div>                        
	        
	        <div class="row">
	            
	            <div class="col-md-12">
	                <div class="block">
	                    <div class="head">
	                        <h2>Chat</h2>                                        
	                        <ul class="buttons">
	                            <li><a href="#" class="block_loading"><span class="i-cycle"></span></a></li>
	                            <li><a href="#" class="block_toggle"><span class="i-arrow-down-3"></span></a></li>
	                            <li><a href="#" class="block_remove"><span class="i-cancel-2"></span></a></li>
	                        </ul>                                        
	                        <div class="side fr">
	                            <span class="label label-success">+4</span>
	                        </div>                                        
	                    </div>
	                    <div class="content messages npr">
	                        <div class="scroll" style="height: 180px;">
	                            <div class="item">
	                                <div class="img">
	                                    <img src="img/examples/users/dmitry_m.jpg" class="img-thumbnail"/>
	                                </div>
	                                <div class="info">
	                                    <a href="#" class="name">John Doe</a> <span class="muted">14:34 03.06.2013</span>
	                                    <div class="text">
	                                        Mauris suscipit dolor ultrices purus mollis accumsan. Donec sit amet orci at justo ultricies dignissim.<br/>
	                                        Maecenas sagittis turpis sit amet risus congue ac luctus ligula pulvinar. Suspendisse a tellus enim. Nam ultrices neque ut elit sagittis et porta risus porttitor.                                                        
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="img right">
	                                    <img src="img/examples/users/olga_m.jpg" class="img-thumbnail"/>
	                                </div>
	                                <div class="info">
	                                    <a href="#" class="name">Olga Ivaniuk</a> <span class="muted">14:30 03.06.2013</span>
	                                    <div class="text">
	                                        Quisque ullamcorper rutrum tortor, ac egestas dui rhoncus at.<br/> 
	                                        Suspendisse nibh neque, suscipit et vestibulum ut, ultricies blandit enim. Donec libero magna, consectetur...<br/>
	                                        Amet risus congue ac luctus ligula pulvinar...
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="img">
	                                    <img src="img/examples/users/dmitry_m.jpg" class="img-thumbnail"/>
	                                </div>
	                                <div class="info">
	                                    <a href="#" class="name">John Doe</a> <span class="muted">12:22 03.06.2013</span>
	                                    <div class="text">
	                                        Mauris suscipit dolor ultrices purus mollis accumsan. Donec sit amet orci at justo ultricies dignissim.<br/>
	                                        Maecenas sagittis turpis sit amet risus congue ac luctus ligula pulvinar. Suspendisse a tellus enim. Nam ultrices neque ut elit sagittis et porta risus porttitor. 
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="img right">
	                                    <img src="img/examples/users/olga_m.jpg" class="img-thumbnail"/>
	                                </div>
	                                <div class="info">
	                                    <a href="#" class="name">Olga Ivaniuk</a> <span class="muted">12:10 03.06.2013</span>
	                                    <div class="text">
	                                        Quisque ullamcorper rutrum tortor, ac egestas dui rhoncus at.<br/> 
	                                        Suspendisse nibh neque, suscipit et vestibulum ut, ultricies blandit enim. Donec libero magna, consectetur...
	                                    </div>
	                                </div>
	                            </div>     
	                        </div>
	                    </div>
	                    <div class="footer">
	                        <div class="side npb">
	                            <textarea class="form-control" placeholder="Message..."></textarea>                                                                                       
	                        </div>
	                        <div class="side fr npt">
	                            <button class="btn btn-primary">Send</button>                                           
	                        </div>
	                    </div>
	                </div>                                
	            </div>
	        </div>
	        
	    </div>
	        
	</div>

@endsection
