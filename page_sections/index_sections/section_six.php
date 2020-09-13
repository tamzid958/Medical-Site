<section>
    <div class="sectiontitle">
    </div>
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                    <i class="fa fa-briefcase"></i>
                    <p id="number1" class="number">12</p>
                    <span></span>
                    <p>Surgery Done</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                    <i class="fa fa-smile-o"></i>
                    <p id="number2" class="number">55</p>
                    <span></span>
                    <p>Happy clients</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                    <i class="fa fa-hospital-o"></i>
                    <p id="number3" class="number">359</p>
                    <span></span>
                    <p>Hospital Rooms</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                    <i class="fa fa-users"></i>
                    <p id="number4" class="number">246</p>
                    <span></span>
                    <p>Recovered</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.fn.jQuerySimpleCounter = function(options) {
            var settings = $.extend({
                start: 0,
                end: 100,
                easing: 'swing',
                duration: 400,
                complete: ''
            }, options);
            var thisElement = $(this);
            $({
                count: settings.start
            }).animate({
                count: settings.end
            }, {
                duration: settings.duration,
                easing: settings.easing,
                step: function() {
                    var mathCount = Math.ceil(this.count);
                    thisElement.text(mathCount);
                },
                complete: settings.complete
            });
        };

        $('#number1').jQuerySimpleCounter({
            end: 12,
            duration: 3000
        });
        $('#number2').jQuerySimpleCounter({
            end: 55,
            duration: 3000
        });
        $('#number3').jQuerySimpleCounter({
            end: 359,
            duration: 2000
        });
        $('#number4').jQuerySimpleCounter({
            end: 246,
            duration: 2500
        });
    </script>
</section>