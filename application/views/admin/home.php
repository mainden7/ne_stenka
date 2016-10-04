

	<div class="mobile-menu-left-overlay"></div>
	

	<div class="page-content">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="unit">$</span><span class="number">1540</span></p>
	                            <p class="caption">баланс</p>
	                        </div>
	                        <table class="tbl-data">
	                            <tr>
	                                <td class="price color-purple">120$</td>
	                                <td>2</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-yellow">15$</td>
	                                <td>3</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-lime">55$</td>
	                                <td>4</td>
	                            </tr>
	                        </table>
	                    </div>
	                    <div class="chart-container">
	                        <div class="chart-container-in">
	                            <div id="chart_div"></div>
	                            <header class="chart-container-title">1</header>
	                            <div class="chart-container-x">
	                                <div class="item"></div>
	                                <div class="item">tue</div>
	                                <div class="item">wed</div>
	                                <div class="item">thu</div>
	                                <div class="item">fri</div>
	                                <div class="item">sat</div>
	                                <div class="item">sun</div>
	                                <div class="item">mon</div>
	                                <div class="item"></div>
	                            </div>
	                            <div class="chart-container-y">
	                                <div class="item">300</div>
	                                <div class="item"></div>
	                                <div class="item">250</div>
	                                <div class="item"></div>
	                                <div class="item">200</div>
	                                <div class="item"></div>
	                                <div class="item">150</div>
	                                <div class="item"></div>
	                                <div class="item">100</div>
	                                <div class="item"></div>
	                                <div class="item">50</div>
	                                <div class="item"></div>
	                            </div>
	                        </div>
	                    </div>
	                    <script>
	                        $(document).ready(function(){
	                           google.charts.load('current', {'packages':['corechart']});
	                            google.charts.setOnLoadCallback(drawChart);
	                            function drawChart() {
	                                var dataTable = new google.visualization.DataTable();
	                                dataTable.addColumn('string', 'Day');
	                                dataTable.addColumn('number', 'Values');
	                                // A column for custom tooltip content
	                                dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
	                                dataTable.addRows([
	                                    ['MON',  130, ' '],
	                                    ['TUE',  130, '130'],
	                                    ['WED',  180, '180'],
	                                    ['THU',  175, '175'],
	                                    ['FRI',  200, '200'],
	                                    ['SAT',  170, '170'],
	                                    ['SUN',  250, '250'],
	                                    ['MON',  220, '220'],
	                                    ['TUE',  220, ' ']
	                                ]);
	
	                                var options = {
	                                    height: 314,
	                                    legend: 'none',
	                                    areaOpacity: 0.18,
	                                    axisTitlesPosition: 'out',
	                                    hAxis: {
	                                        title: '',
	                                        textStyle: {
	                                            color: '#fff',
	                                            fontName: 'Proxima Nova',
	                                            fontSize: 11,
	                                            bold: true,
	                                            italic: false
	                                        },
	                                        textPosition: 'out'
	                                    },
	                                    vAxis: {
	                                        minValue: 0,
	                                        textPosition: 'out',
	                                        textStyle: {
	                                            color: '#fff',
	                                            fontName: 'Proxima Nova',
	                                            fontSize: 11,
	                                            bold: true,
	                                            italic: false
	                                        },
	                                        baselineColor: '#16b4fc',
	                                        ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
	                                        gridlines: {
	                                            color: '#1ba0fc',
	                                            count: 15
	                                        },
	                                    },
	                                    lineWidth: 2,
	                                    colors: ['#fff'],
	                                    curveType: 'function',
	                                    pointSize: 5,
	                                    pointShapeType: 'circle',
	                                    pointFillColor: '#f00',
	                                    backgroundColor: {
	                                        fill: '#008ffb',
	                                        strokeWidth: 0,
	                                    },
	                                    chartArea:{
	                                        left:0,
	                                        top:0,
	                                        width:'100%',
	                                        height:'100%'
	                                    },
	                                    fontSize: 11,
	                                    fontName: 'Proxima Nova',
	                                    tooltip: {
	                                        trigger: 'selection',
	                                        isHtml: true
	                                    }
	                                };
	
	                                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
	                                chart.draw(dataTable, options);
	                            }
	                            $(window).resize(function(){
	                                drawChart();
	                                setTimeout(function(){
	                                }, 1000);
	                            });
	                        });
	                    </script>
	                </div><!--.chart-statistic-box-->
	            </div><!--.col-->
	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">26</div>
	                                <div class="caption"><div>1</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>15%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">12</div>
	                                <div class="caption"><div>2</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>11%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">104</div>
	                                <div class="caption"><div>3</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>5%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">29</div>
	                                <div class="caption"><div>4</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->
	
	        <div class="row">
	            <div class="col-xl-6">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Recent orders</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">
	                                <a href="index.html#" class="action-btn">
	                                    <i class="font-icon font-icon-close"></i>
	                                </a>
	                                <button type="button" class="action-btn action-btn-collapse">
	                                    <i class="font-icon font-icon-minus"></i>
	                                </button>
	                                <button type="button" class="action-btn">
	                                    <i class="font-icon font-icon-pencil-thin"></i>
	                                </button>
	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>
	                                <button type="button" class="action-btn">
	                                    <i class="font-icon font-icon-filter"></i>
	                                </button>
	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>Status</div></th>
	                                <th><div>Clients</div></th>
	                                <th align="center"><div>Orders#</div></th>
	                                <th align="center"><div>Date</div></th>
	                            </tr>
	                            
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	
	            <div class="col-xl-6">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Recent tickets</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">
	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>
	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>Status</div></th>
	                                <th><div>Subject</div></th>
	                                <th align="center"><div>Department</div></th>
	                                <th align="center"><div>Date</div></th>
	                            </tr>
	                            
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	
	            <div class="col-xl-6">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Comments</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">
	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>
	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                       
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	
	            <div class="col-xl-6">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Contacts</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">
	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>
	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                        <div class="contact-row-list">
	                            
	                        </div>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	        </div><!--.row-->
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	<!--Progress bar-->
	<!--<div class="circle-progress-bar pieProgress" role="progressbar" data-goal="100" data-barcolor="#ac6bec" data-barsize="10" aria-valuemin="0" aria-valuemax="100">-->
	    <!--<span class="pie_progress__number">0%</span>-->
	<!--</div>-->

</body>
</html>