<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

        html, body{padding:0; margin:0; font-family: 'Roboto', 'Noto Sans KR', sans-serif;}
        ul, li{padding:0; margin:0; list-style: none;}
        a{text-decoration: none; color:inherit; font-size: inherit; transition:all 0.2s ease-in}
        .inner{padding:0 8%;}

        .depWrap{position:relative;  letter-spacing: 1px; font-size:14px;}
        .depWrap ul{padding-left: 8%; padding-right:8%; box-sizing: border-box;}
        .dep1 {padding-bottom:15px; border-bottom:1px solid #f1f1f1;}
        .dep1 .dep1onMenu{display:none;}
        .dep1 li{position:relative; display:inline-block; margin:0 30px 0 0; vertical-align:top; line-height: 1em; font-weight:900;}
        .dep1 li::before{content:""; width:100%; height:3px; background:#000; position:absolute; bottom:-19px; transition:all 0.2s ease-in; transform:scaleX(0)}
        .dep1 li.on::before {transform:scaleX(1)}
        .dep1 li:not(.on){color:#9E9E9E; font-weight:500; }
        .dep1 li:not(.on):hover{color:#000;}
        .dep1 li:not(.on):hover::before{transform:scaleX(1); height:1px;}

        .dep2{padding:1% 0; width:100%;}
        .dep2 li{display:inline-block;  padding:10px 30px 10px 0px; color:#787878; font-size:13px;  font-weight:500}
        .dep2 li:not(.on):hover{color:#333;;}
        .dep2 li.on{color:#2E5BA7; font-weight:900;}

        .dep3_bg{background:url(subHeader.jpg) no-repeat center right; background-size:cover; width:100%; height:95px; line-height:95px; font-family:"Montserrat"; color:#FFF; font-weight:bold; font-size:32px; text-align: center;}
        .dep3{padding:20px 10px; border:1px solid #f1f1f1; border-top:0; text-align:center; font-size:14px; font-weight: 500; color:#9e9e9e;;}
        .dep3 li{position:relative; display:inline-block; vertical-align: top; line-height: 1em; }
        .dep3 li:before{content:""; width:1px; height:10px; background:#ddd; margin:0 15px; display:inline-block;}
        .dep3 li:hover{color:#333;}
        .dep3 li:first-child::before{display: none;}
        .dep3 li.on{color:#000; font-weight:900;}

        .dep3_titleWrap {margin:50px auto 20px}

        .produce_Detail{display:none; overflow:hidden; padding:4% 0 16%}
        .produce_Detail.on{display:block;}
        .produce_Detail > div{float:left; box-sizing: border-box; position: relative;}
        .produce_Detail .prod_img {width:445px; text-align: center;}
        .produce_Detail .prod_img img{width: 90%;}
        .produce_Detail .pord_txt {width:calc(100% - 445px);}

        .produce_Detail .pord_txt .tit{font-size:30px; font-weight:bold; color:#000; margin-bottom:60px;}
        .produce_Detail .pord_txt .con{}
        .produce_Detail .pord_txt .con > li{margin-bottom:40px}
        .produce_Detail .pord_txt .con .t{color:#222; font-size:17px; font-weight: bold; padding-bottom:20px; margin-bottom:10px; border-bottom:1px solid #f0f0f0;}
        .produce_Detail .pord_txt .con .c{color:#666; font-size:13px; line-height: 1.6em; font-weight: 300;}
        .produce_Detail .pord_txt .typebox span{display:inline-block; margin:0 10px 10px 0; border:1px solid #dfdfdf; padding:4px 15px; text-transform: uppercase; font-weight:bold;}
        .produce_Detail .pord_txt .volume{}
        .produce_Detail .pord_txt .volume li{margin-bottom:5px; overflow: hidden;}
        .produce_Detail .pord_txt .volume li .type{font-weight: bold; float:left; margin-right:10px;}
        .produce_Detail .pord_txt .volume li .link{}
        .produce_Detail .pord_txt .volume li .link span{display:inline-block; margin-right:10px; cursor:pointer}
        .produce_Detail .pord_txt .volume li .link span:hover{color:#2E5BA7}

        @media all and (max-width:1440px) { 

            .dep2 { overflow-x:scroll; white-space: nowrap; padding-bottom:5px; /*-ms-overflow-style: none; scrollbar-width: none;*/}
            .dep2::-webkit-scrollbar{display:none;}
            .dep2:hover{padding-bottom:0;}
            .dep2:hover::-webkit-scrollbar{ height:5px; display:block; overflow:visible; }
            .dep2:hover::-webkit-scrollbar-thumb { background-color: #F1f1f1; overflow:visible;}
            .dep2:hover::-webkit-scrollbar-track { background-color:#FFF; }

            .produce_Detail .prod_img {width:400px;}
            .produce_Detail .pord_txt {width:calc(100% - 400px);}
        }
        @media all and (min-width:959px) {.dep1 ul{display:Block !important} }
        @media all and (max-width:960px) { 

            .dep1{position:relative; border-top:1px solid #f1f1f1; padding-top:15px;;}
            .dep1 .dep1onMenu{position:relative; display:block; padding:0 8%; font-weight:bold; cursor:pointer; }
            .dep1 .dep1onMenu:before{content:""; position:absolute; right:8%; top:1px; width:6px; height:6px; border:2px solid #444; border-width:2px 2px 0 0; transform: rotate(135deg);}
            .dep1 ul{ position:absolute; width:100%; background:#FFF; border:1px solid #f1f1f1; border-width:1px 0; z-index:2; margin-top:15px; display: none; box-shadow: 0 10px 10px rgb(160 160 160 / 30%);}
            .dep1 ul li{display:block; padding:10px 0; border-top:1px solid #ddd; }
            .dep1 ul li:first-child{border-top:0;}
            .dep1 ul li::before{display: none;}
            .produce_Detail .prod_img {width:50%;}
            .produce_Detail .pord_txt {width:50%;}

            .dep3_bg{height:80px; line-height:80px}
        }
        @media all and (max-width:768px) { 
            .produce_Detail .prod_img {width:100%;}
            .produce_Detail .pord_txt {width:100%;}
        }
    </style>

    <div class=""><img src="header.jpg" width="100%" /></div>

    <div class="depWrap">
        <div class="dep1">
            <span class="dep1onMenu"></span>
            <ul>
                <li class="on"><a href="#">LUBRICATING OIL</a></li>
                <li><a href="#">INDUSTRIAL OIL(준비중)</a></li>
                <li><a href="#">GRESE(준비중)</a></li>
                <li><a href="#">OTHERS(준비중)</a></li>  
            </ul>
        </div>
        <ul class="dep2">
            <li class="on"><a href="#">PASSENGER CAR</a></li>
            <li><a href="#">PASSENGER 디젤</a></li>
            <li><a href="#">HEAVY DUTY</a></li>
            <li><a href="#">ATF TRANSMISSION</a></li>
            <li><a href="#">CVT TRANSMISSION</a></li>
            <li><a href="#">MTF TRANSMISSION</a></li>
            <li><a href="#">HYDRAULIC OIL</a></li>
            <li><a href="#">MOTORCYCLE</a></li>
        </ul>
    </div>

    <div class="inner">
        <div class="dep3_titleWrap">
            <div class="dep3_bg"></div>
            <ul class="dep3">
                <li class="on KhanGoli"><a href="#KhanGoli">KHAN GOLI</a></li>
                <li class="KhanPAO"><a href="#KhanPAO">KHAN PAO</a></li>
                <li class="KhanG"><a href="#KhanG">KHAN G</a></li>
                <li class="KhanGSL"><a href="#KhanGSL">KHAN G-SL</a></li>
            </ul>
        </div>

        <div class="produce_Detail dep3_con1 on">
            <div class="prod_img">
                <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/4L_GOLI.png" />
            </div>
            <div class="pord_txt">
                <div class="tit">KHAN GOLI</div>

                <ul class="con">
                    <li>
                        <div class="t">PERFORMANCE LEVE</div>
                        <div class="c">Meets the requirements of<br/><b>API SP-RC / ILSAC GF-6A</b></div>
                    </li>
                    
                    <li>
                        <div class="t">TYPE</div>
                        <div class="c typebox">
                            <span>type1</span>
                            <span>type2</span>
                            <span>type3</span>
                            <span>type4</span>
                            <span>type5</span>
                            <span>type6</span>
                        </div>
                    </li>

                    <li>
                        <div class="t">Volume</div>
                        <ul class="c volume">
                            <li class="">
                                <div class="type">Tincan</div>
                                <div class="link">
                                    <span data-img="4L_GOLI">1L</span>
                                    <span data-img="4L_PAO">4L</span>
                                    <span data-img="4L_GOLI">20L</span>
                                    <span data-img="4L_PAO">200L</span>
                                </div>
                            </li>
                            <li class="">
                                <div class="type">Plastic</div>
                                <div class="link">
                                    <span>1L</span>
                                    <span>4L</span>
                                    <span>6L</span>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="t">FULLY SYNTHETIC GASOLINE</div>
                        <div class="c">KHAN GOLI is a high performance fully synthetic engine oil, formulated from the latest additives,the cutting-edge technology(TET) and the highest performance synthetic base oil to meet the latest API SP-RC and ILSAC GF-6A specifications. It is developed to provide optimized engine oil performance, especially improved durability and fuel economy with wear protection and friction reduction. In addition, it is suitable for modern vehicles against LSPI.</div>
                    </li>

                    <li>
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-1.jpg" />
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-2.jpg" />
                    </li>
                </ul>
            </div>
        </div>

        <div class="produce_Detail dep3_con2">
            <div class="prod_img">
                <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/4L_GOLI.png" />
            </div>
            <div class="pord_txt">
                <div class="tit">KHAN PAO</div>

                <ul class="con">
                    <li>
                        <div class="t">PERFORMANCE LEVE</div>
                        <div class="c">Meets the requirements of<br/><b>API SP-RC / ILSAC GF-6A</b></div>
                    </li>
                    
                    <li>
                        <div class="t">TYPE</div>
                        <div class="c typebox">
                            <span>type1</span>
                            <span>type2</span>
                            <span>type3</span>
                            <span>type4</span>
                            <span>type5</span>
                            <span>type6</span>
                        </div>
                    </li>

                    <li>
                        <div class="t">Volume</div>
                        <ul class="c volume">
                            <li class="">
                                <div class="type">Tincan</div>
                                <div class="link">
                                    <span data-img="4L_GOLI">1L</span>
                                    <span data-img="4L_PAO">4L</span>
                                    <span data-img="4L_GOLI">20L</span>
                                    <span data-img="4L_PAO">200L</span>
                                </div>
                            </li>
                            <li class="">
                                <div class="type">Plastic</div>
                                <div class="link">
                                    <span>1L</span>
                                    <span>4L</span>
                                    <span>6L</span>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="t">FULLY SYNTHETIC GASOLINE</div>
                        <div class="c">KHAN GOLI is a high performance fully synthetic engine oil, formulated from the latest additives,the cutting-edge technology(TET) and the highest performance synthetic base oil to meet the latest API SP-RC and ILSAC GF-6A specifications. It is developed to provide optimized engine oil performance, especially improved durability and fuel economy with wear protection and friction reduction. In addition, it is suitable for modern vehicles against LSPI.</div>
                    </li>

                    <li>
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-1.jpg" />
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-2.jpg" />
                    </li>
                </ul>
            </div>
        </div>

        <div class="produce_Detail dep3_con3">
            <div class="prod_img">
                <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/4L_GOLI.png" />
            </div>
            <div class="pord_txt">
                <div class="tit">KHAN G</div>

                <ul class="con">
                    <li>
                        <div class="t">PERFORMANCE LEVE</div>
                        <div class="c">Meets the requirements of<br/><b>API SP-RC / ILSAC GF-6A</b></div>
                    </li>
                    
                    <li>
                        <div class="t">TYPE</div>
                        <div class="c typebox">
                            <span>type1</span>
                            <span>type2</span>
                            <span>type3</span>
                            <span>type4</span>
                            <span>type5</span>
                            <span>type6</span>
                        </div>
                    </li>

                    <li>
                        <div class="t">Volume</div>
                        <ul class="c volume">
                            <li class="">
                                <div class="type">Tincan</div>
                                <div class="link">
                                    <span data-img="4L_GOLI">1L</span>
                                    <span data-img="4L_PAO">4L</span>
                                    <span data-img="4L_GOLI">20L</span>
                                    <span data-img="4L_PAO">200L</span>
                                </div>
                            </li>
                            <li class="">
                                <div class="type">Plastic</div>
                                <div class="link">
                                    <span>1L</span>
                                    <span>4L</span>
                                    <span>6L</span>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="t">FULLY SYNTHETIC GASOLINE</div>
                        <div class="c">KHAN GOLI is a high performance fully synthetic engine oil, formulated from the latest additives,the cutting-edge technology(TET) and the highest performance synthetic base oil to meet the latest API SP-RC and ILSAC GF-6A specifications. It is developed to provide optimized engine oil performance, especially improved durability and fuel economy with wear protection and friction reduction. In addition, it is suitable for modern vehicles against LSPI.</div>
                    </li>

                    <li>
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-1.jpg" />
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-2.jpg" />
                    </li>
                </ul>
            </div>
        </div>

        <div class="produce_Detail dep3_con4">
            <div class="prod_img">
                <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/4L_GOLI.png" />
            </div>
            <div class="pord_txt">
                <div class="tit">KHAN G-SL</div>

                <ul class="con">
                    <li>
                        <div class="t">PERFORMANCE LEVE</div>
                        <div class="c">Meets the requirements of<br/><b>API SP-RC / ILSAC GF-6A</b></div>
                    </li>
                    
                    <li>
                        <div class="t">TYPE</div>
                        <div class="c typebox">
                            <span>type1</span>
                            <span>type2</span>
                            <span>type3</span>
                            <span>type4</span>
                            <span>type5</span>
                            <span>type6</span>
                        </div>
                    </li>

                    <li>
                        <div class="t">Volume</div>
                        <ul class="c volume">
                            <li class="">
                                <div class="type">Tincan</div>
                                <div class="link">
                                    <span data-img="4L_GOLI">1L</span>
                                    <span data-img="4L_PAO">4L</span>
                                    <span data-img="4L_GOLI">20L</span>
                                    <span data-img="4L_PAO">200L</span>
                                </div>
                            </li>
                            <li class="">
                                <div class="type">Plastic</div>
                                <div class="link">
                                    <span>1L</span>
                                    <span>4L</span>
                                    <span>6L</span>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="t">FULLY SYNTHETIC GASOLINE</div>
                        <div class="c">KHAN GOLI is a high performance fully synthetic engine oil, formulated from the latest additives,the cutting-edge technology(TET) and the highest performance synthetic base oil to meet the latest API SP-RC and ILSAC GF-6A specifications. It is developed to provide optimized engine oil performance, especially improved durability and fuel economy with wear protection and friction reduction. In addition, it is suitable for modern vehicles against LSPI.</div>
                    </li>

                    <li>
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-1.jpg" />
                        <img src="http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/%EB%A0%88%EC%9D%B4%EC%96%B4-2.jpg" />
                    </li>
                </ul>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                var url = new URL(window.location.href);
                var selector = (url.hash).replace("#", "");
                $('.dep3 li').removeClass("on");
                $(`.${selector}`).addClass("on");

                $(".dep1onMenu").text($(".dep1 .on a").text());
                $(".dep3_bg").text($(".dep2 .on a").text());
                
                $(".volume span").click(function(e) {
                    var imgName = $(this).data("img");
                    $(".prod_img img").attr("src" , `http://khanlubrica.cafe24.com/wp-content/uploads/2021/03/${imgName}.png`)
                });
                
                $(".dep1 .dep1onMenu").click(function(){
                    $(".dep1 ul").slideToggle(200)
                });

                $('.dep3 li').click(function(){
                    let idx = $(this).index() + 1;
                    $(".dep3 li, .produce_Detail").removeClass("on")
                    $(`.dep3 li:nth-of-type(${idx}), .produce_Detail.dep3_con${idx}`).addClass("on")
                });
            });
        </script>

    </div>

</body>
</html>