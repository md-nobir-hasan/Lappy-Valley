<div class="h-[360px]">
    <style>
        .button0 {
            animation: anime 1s infinite ease-in-out;

        }

        .button0 {
            animation-delay: .3s;
        }

        @keyframes anime {
            100% {
                transform: : translateY(20px);
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                box-shadow: 0 40px 10px -18px rgba (0, 0, 0, 0.2);
            }
        }
    </style>
    <div class="flex h-full justify-center items-center mt-[50px]">
        <button id="sslczPayBtn" token="if you have any token validation" class=" button0 shadow-lg shadow-cyan-500/50"
            postdata="your javascript arrays or objects which requires in backend"
            order="If you already have the transaction generated for current order" endpoint="{{ url('/pay-via-ajax') }}">
            Pay Now
        </button>
    </div>

    <div>
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <!-- If you want to use the popup integration, -->
        <script>
            var obj = {};
            obj.order_id = '{{ $order->id }}';


            $('#sslczPayBtn').prop('postdata', obj);


            (function(window, document) {
                var loader = function() {
                    var script = document.createElement("script"),
                        tag = document.getElementsByTagName("script")[0];
                    // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                        7); // USE THIS FOR SANDBOX
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                    loader);
            })(window, document);
        </script>
    </div>
</div>
