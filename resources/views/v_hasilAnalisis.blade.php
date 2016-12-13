<!DOCTYPE html>
<html>
<head>
    <title>Kondisi Tanah | SEMAPUT</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>


    <div class="transparan1"><img id="background" src="{{ URL::asset('image/backgroundhasil.jpg') }}"></div>
    <div id="atas-home">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ilogo1"><img class="ilogo2" src="{{ URL::asset('image/logosemaputpadi.png') }}">
                    <div class="tlogo2"> <span class="ku rb">SEMAPUT-PADI</span></div></div>
                </div>
                <div class="two wide column">
                </div>
                <div class="nine wide column" style=" margin-top: 5vh;">
                    <div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/iconhasilkesimpulan.png') }}"></div>
                    <p><div class="tulisan3 " ><div class="t3" ><span class="pu"> HASIL</span> <span class="ku"> ANALISIS</span></div></div></p>
                </div>
                <div class="two wide column">
                    <a href="/logout">
                    <button class="ui inverted yellow button" style="margin-right: 30px;">Logout</button>
                    </a>
                </div>
            </div>




            <div id="container" ">
                <div class="ui grid">
                        <div class="three wide column">
                        </div>
                        <div class="six wide column">
                            <p style="margin-bottom: 0px;"><span class=tx-hasil><span class="ku">Keadaan Unsur</span><span class="pu"> Tanah</span></span><br></p>
                        </div>
                        <div class="six wide column">
                            <p style="margin-bottom: 0px;"><span class=tx-hasil><span class="ku">Rekomendasi</span><span class="pu"> Pupuk</span></span><br></p>
                        </div>
                        </div>

                        <div class="ui grid">
                            <div class="three wide column">
                            </div>
                            <div class="two wide column">
                                <p style="margin-bottom: 38px;margin-top: 5px;"><span class=tx-hasil><span class="ku">UNSUR</span><span class="pu"> N</span></span>
                                    <br></p>
                                    <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">UNSUR</span><span class="pu"> P</span></span><br> </p>
                                    <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">UNSUR</span><span class="pu"> K</span></span>
                                        <br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">UNSUR</span><span class="pu"> Ph</span></span></p>
                                    </div>
                                    <div class="one wide column" >
                                        <p style="margin-bottom: 35px;margin-top: 0px; "><span class=tx-input><span class="pu">:</span></span><br></p>
                                        <p style="margin-bottom: 15px;"><span class=tx-input><span class="pu">:</span></span></p><br>
                                        <p style="margin-bottom: 15px;"><span class=tx-input><span class="pu">:</span></span></p><br>
                                        <p style="margin-bottom: 15px;"><span class=tx-input><span class="pu">:</span></span></p><br>
                                    </div>
                                    <div class="three wide column">
                                        <p style="margin-bottom: 38px;margin-top: 5px;"><span class=tx-hasil><span class="ku">{{ Session::get('warnaDaun') }}</span></span><br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">{{ Session::get('kadarP') }}</span></span><br> </p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">{{ Session::get('kadarK') }}</span></span><br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">{{ Session::get('ph') }}</span></span></p>

                                    </div>
                                    <div class="two wide column" style="margin-left: 50px;">
                                        <p style="margin-bottom: 38px;margin-top: 5px;"><span class=tx-hasil><span class="ku">UR</span><span class="pu">EA</span></span>
                                            <br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">SP-</span><span class="pu">36</span></span><br> </p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">KCL</span><span class="pu">(+JERAMI)</span></span>
                                                <br></p>
                                        <p style="margin-bottom: 25px;"><span class=tx-hasil><span class="ku">KCL</span><span class="pu">(-JERAMI)</span></span></p><br>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">Z</span><span class="pu">A</span></span></p>
                                    </div>
                                    <div class="two wide column" style="margin-left: 50px;">
                                        <p style="margin-bottom: 38px;margin-top: 3px;"><span class=tx-hasil><span class="ku">: {{ Session::get('urea') }}</span></span><br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">: {{ Session::get('sp36') }}</span></span><br> </p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">: {{ Session::get('KCLJ') }}</span></span><br></p>
                                        <p style="margin-bottom: 38px;"><span class=tx-hasil><span class="ku">: {{ Session::get('KCLN') }}</span></span><br></p>
                                        <p><span class=tx-hasil><span class="ku">: {{ Session::get('za') }}</span></span></p>
                                    </div>


                                        </div>

                    <div style="text-align: center;">
                        <div class="ui float right buttons">
                            <a href="{{URL('tersimpan')}}"><button class="ui inverted olive button" >Simpan</button></a>
                                <div class="or"></div>
                            <a href="{{URL('')}}"><button class="ui inverted green button">Kembali</button></a>
                        </div>
                    </div>
                    <br><br>





                                        <footer style="bottom: 0px;position: fixed;">
                                            <div class="versi">
                                                Recently, v0.3
                                            </div>
                                            <div class="team">
                                                by : Yovanka Adam, Anne Rufaedah, Riya Alvianita, Reny Rizqiyatus S.
                                            </div>
                                            <div class="for">
                                                pplagro2016
                                            </div>
                                        </footer>


                                    </body>
                                    </html>




















