@if ($message = Session::get('message'))
    <div class="col-xl-3 col-sm-6 position-absolute z-index2 right shadow " id="alert-modal-message-success">
        <div class="card border p-0 pb-3">
            <div class="card-header border-0 pt-3">
                <div class="card-options">
                    <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i
                            class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body text-center">
                <table>
                    <tr>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24">
                                <path fill="#13bfa6"
                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                    opacity=".99" />
                                <path fill="#71d8c9"
                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                            </svg>
                        </td>
                        <td style="text-align: left;">
                            <h4 class="h4 mb-0 mt-3"><b>Success</b></h4>
                            <p class="card-text">{{ $message }}</p>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById("alert-modal-message-success").style.display = "none";
        }, 5000); // 5000 ms = 5 secondes
    </script>
@endif





