window.jssor_1_slider_init = function () {

    var jssor_1_SlideoTransitions = [
        [{
            b: 500,
            d: 1000,
            x: 0,
            e: {
                x: 6
            }
        }],
        [{
            b: -1,
            d: 1,
            x: 100,
            p: {
                x: {
                    d: 1,
                    dO: 9
                }
            }
        }, {
            b: 0,
            d: 2000,
            x: 0,
            e: {
                x: 6
            },
            p: {
                x: {
                    dl: 0.1
                }
            }
        }],
        [{
            b: -1,
            d: 1,
            x: 200,
            p: {
                x: {
                    d: 1,
                    dO: 9
                }
            }
        }, {
            b: 0,
            d: 2000,
            x: 0,
            e: {
                x: 6
            },
            p: {
                x: {
                    dl: 0.1
                }
            }
        }],
        [{
            b: -1,
            d: 1,
            rX: 20,
            rY: 90
        }, {
            b: 0,
            d: 4000,
            rX: 0,
            e: {
                rX: 1
            }
        }],
        [{
            b: -1,
            d: 1,
            rY: -20
        }, {
            b: 0,
            d: 4000,
            rY: -90,
            e: {
                rY: 7
            }
        }],
        [{
            b: -1,
            d: 1,
            sX: 2,
            sY: 2
        }, {
            b: 1000,
            d: 3000,
            sX: 1,
            sY: 1,
            e: {
                sX: 1,
                sY: 1
            }
        }],
        [{
            b: -1,
            d: 1,
            sX: 2,
            sY: 2
        }, {
            b: 1000,
            d: 5000,
            sX: 1,
            sY: 1,
            e: {
                sX: 3,
                sY: 3
            }
        }],
        [{
            b: -1,
            d: 1,
            tZ: 300
        }, {
            b: 0,
            d: 2000,
            o: 1
        }, {
            b: 3500,
            d: 3500,
            tZ: 0,
            e: {
                tZ: 1
            }
        }],
        [{
            b: -1,
            d: 1,
            x: 20,
            p: {
                x: {
                    o: 33,
                    r: 0.5
                }
            }
        }, {
            b: 0,
            d: 1000,
            x: 0,
            o: 0.5,
            e: {
                x: 3,
                o: 1
            },
            p: {
                x: {
                    dl: 0.05,
                    o: 33
                },
                o: {
                    dl: 0.02,
                    o: 68,
                    rd: 2
                }
            }
        }, {
            b: 1000,
            d: 1000,
            o: 1,
            e: {
                o: 1
            },
            p: {
                o: {
                    dl: 0.05,
                    o: 68,
                    rd: 2
                }
            }
        }],
        [{
            b: -1,
            d: 1,
            da: [0, 700]
        }, {
            b: 0,
            d: 600,
            da: [700, 700],
            e: {
                da: 1
            }
        }],
        [{
            b: 600,
            d: 1000,
            o: 0.4
        }],
        [{
            b: -1,
            d: 1,
            da: [0, 400]
        }, {
            b: 200,
            d: 600,
            da: [400, 400],
            e: {
                da: 1
            }
        }],
        [{
            b: 800,
            d: 1000,
            o: 0.4
        }],
        [{
            b: -1,
            d: 1,
            sX: 1.1,
            sY: 1.1
        }, {
            b: 0,
            d: 1600,
            o: 1
        }, {
            b: 1600,
            d: 5000,
            sX: 0.9,
            sY: 0.9,
            e: {
                sX: 1,
                sY: 1
            }
        }],
        [{
            b: 0,
            d: 1000,
            o: 1,
            p: {
                o: {
                    o: 4
                }
            }
        }],
        [{
            b: 1000,
            d: 1000,
            o: 1,
            p: {
                o: {
                    o: 4
                }
            }
        }]
    ];
    var jssor_1_options = {
        $AutoPlay: 1,
        $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 16,
            $SpacingY: 16
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1200;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};

"use strict";

productScroll();

function productScroll() {
    let slider = document.getElementById("slider");
    let next = document.getElementsByClassName("pro-next");
    let prev = document.getElementsByClassName("pro-prev");
    let slide = document.getElementById("slide");
    let item = document.getElementById("slide");

    for (let i = 0; i < next.length; i++) {
        //refer elements by class name

        let position = 0; //slider postion

        prev[i].addEventListener("click", function () {
            //click previos button
            if (position > 0) {
                //avoid slide left beyond the first item
                position -= 1;
                translateX(position); //translate items
            }
        });

        next[i].addEventListener("click", function () {
            if (position >= 0 && position < hiddenItems()) {
                //avoid slide right beyond the last item
                position += 1;
                translateX(position); //translate items
            }
        });
    }

    function hiddenItems() {
        //get hidden items
        let items = getCount(item, false);
        let visibleItems = slider.offsetWidth / 210;
        return items - Math.ceil(visibleItems);
    }
}

function translateX(position) {
    //translate items
    slide.style.left = position * -240 + "px";
}

function getCount(parent, getChildrensChildren) {
    //count no of items
    let relevantChildren = 0;
    let children = parent.childNodes.length;
    for (let i = 0; i < children; i++) {
        if (parent.childNodes[i].nodeType != 3) {
            if (getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i], true);
            relevantChildren++;
        }
    }
    return relevantChildren;
}