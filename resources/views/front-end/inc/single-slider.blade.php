<div class="col-md-3 product-agileinfo-grid">
                    <div class="categories">
                        <h3>Categories</h3>
                        <ul class="tree-list-pad">
                            <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Men's Wear</label>
                                <ul>
                                    <li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethnic Wear</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Caps</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li><input type="checkbox"  id="item-0-1" /><label for="item-0-1">Party Wear</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Caps</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li><input type="checkbox"  id="item-0-2" /><label for="item-0-2">Casual Wear</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Caps</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best Collections</label>
                                <ul>
                                    <li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New Arrivals</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
                                <ul>
                                    <li><input type="checkbox"  id="item-2-0" /><label for="item-2-0">Summer Discount Sales</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                        </ul>
                                    </li>
                                    <li><input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                        </ul>
                                    </li>
                                    <li><input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Pants</a></li>
                                            <li><a href="products.html">SunGlasses</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="price">
                        <h3>Price Range</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                <div id="slider-range"></div>
                                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                            </li>
                        </ul>
                        <script type='text/javascript'>//<![CDATA[
                            $(window).load(function(){
                                $( "#slider-range" ).slider({
                                    range: true,
                                    min: 0,
                                    max: 9000,
                                    values: [ 1000, 7000 ],
                                    slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                    }
                                });
                                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                            });//]]>

                        </script>
                        <script type="text/javascript" src="js/jquery-ui.js"></script>
                    </div>
                    <div class="top-rates">
                        <h3>Top Rates products</h3>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <p><del>$100.00</del> <em class="item_price">$09.00</em></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                <p><del>$100.00</del> <em class="item_price">$19.00</em></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <p><del>$100.00</del> <em class="item_price">$39.00</em></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                <p><em class="item_price">$39.00</em></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="brand-w3l">
                        <h3>Brands Filter</h3>
                        <ul>
                            <li><a href="#">Ralph Lauren</a></li>
                            <li><a href="#">adidas</a></li>
                            <li><a href="#">Bottega Veneta</a></li>
                            <li><a href="#">Valentino</a></li>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Burberry</a></li>
                            <li><a href="#">Michael Kors</a></li>
                            <li><a href="#">Louis Vuitton</a></li>
                            <li><a href="#">Jimmy Choo</a></li>
                        </ul>
                    </div>
                    <div class="cat-img">
                        <img class="img-responsive " src="images/45.jpg" alt="">
                    </div>
                </div>
