  <style>
      /* ========================= */
      @media (min-width: 1200px) {
          .modal-lg {
              max-width: 1250px !important;
          }
      }

      .modal-file-manager .modal-header .modal-title {
          float: left;
      }

      .modal-file-manager .modal-content {
          border-radius: 4px;
      }

      .modal-file-manager .modal-body {
          padding: 0;
      }

      .file-manager {
          width: 100%;
          max-width: 100%;
          display: table;
      }

      .file-manager-content {
          height: 422px;
          overflow-y: auto;
      }

      .file-manager-left {
          width: 20%;
          display: table-cell;
          border-right: 1px solid #eee;
          vertical-align: top;
          padding: 15px;
          background-color: #dce0e6;
      }

      .file-manager-middel {
          width: auto;
          display: table-cell;
          vertical-align: top;
          padding: 15px;
      }

      .file-manager-right {
          width: 20%;
          display: table-cell;
          vertical-align: top;
          padding: 15px;
          background-color: #dce0e6;
      }

      .file-manager-left .btn-upload {
          display: block;
          font-size: 14px;
          position: relative;
          cursor: pointer !important;
          padding: 8px 14px;
      }

      .file-manager-left .btn-upload span {
          cursor: pointer !important;
          z-index: 10 !important;
      }

      .file-manager-left .btn-upload input {
          cursor: pointer !important;
      }

      .col-file-manager {
          float: left;
          width: auto;
          padding: 5px;
      }

      .file-box {
          display: block;
          width: 100%;
          border: 1px solid #eee;
          cursor: pointer;
          text-align: center;
          position: relative;
          border-radius: 2px;
      }

      .file-box .image-container {
          display: block;
          width: 122px;
          height: 100px;
          overflow: hidden;
          text-align: center;
          border-radius: 2px;
      }

      .file-box .icon-container {
          padding: 10px;
          height: 110px;
      }

      .file-box .image-container img {
          margin: 0 auto;
          position: relative;
          width: auto;
          min-width: 100%;
          max-width: none;
          height: 100%;
          margin-left: 50%;
          transform: translateX(-50%);
          object-fit: cover;
      }

      .file-box .file-name {
          width: 100%;
          position: absolute;
          bottom: 0;
          left: 0;
          font-size: 12px;
          line-height: 14px;
          background-color: #f4f4f4;
          padding: 2px;
          display: block;
          text-align: center;
          word-break: break-all;
      }

      #audio_file_manager .file-box,
      #video_file_manager .file-box {
          height: 132px;
          text-align: center;
          text-overflow: ellipsis;
          overflow: hidden;
      }

      .file-icon {
          width: 80px;
          margin: 0 auto;
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          cursor: pointer;
      }

      .file-manager .selected {
          box-shadow: 0 0 3px rgba(40, 174, 141, 1);
          border: 1px solid rgba(40, 174, 141, 1);
      }

      .file-manager-footer {
          margin-left: 235px;
      }

      .btn-file-delete {
          display: none;
      }

      .btn-file-select {
          display: none;
      }

      .file-manager-list-item-name {
          width: 100%;
          padding: 0 5px;
          margin: 0;
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          cursor: pointer;
      }

      .input-file-label {
          width: 190px;
          background-color: #5bc0de;
          color: #fff;
          text-align: center;
          text-overflow: ellipsis;
          overflow: hidden;
          white-space: nowrap;
          padding: 0 5px;
          font-size: 12px;
      }

      .loader-file-manager {
          display: none;
          position: relative;
          width: 100%;
          text-align: center;
          margin-top: 10px;
      }

      .loader-file-manager img {
          position: relative;
          width: 50px;
          height: 50px;
      }

      .file-manager-search {
          /* position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-left: 235px; */
      }

      #image_file_manager .modal-header .close {
          padding: 1rem 1rem;
          margin: -1rem 1rem auto;
      }

      .file-manager-search input {
          border-radius: 2px;
          width: 300px;
          text-align: center
      }

      .dm-uploaded-files .bg-success {
          background-color: #28a745;
      }

      .file-manager-file-types {
          width: 100%;
          position: relative;
          margin: 0;
          left: 0;
          right: 0;
          top: 15px;
          text-align: center;
      }

      .file-manager-file-types span {
          display: inline-block;
          font-size: 11px;
          margin-right: 2px;
          margin-bottom: 2px;
          color: #979ba1 !important;
          padding: 2px 4px;
          border: 1px dashed #dce0e6 !important;
          border-radius: 2px;
      }

      @media (max-width: 900px) {
          .file-manager-left {
              display: block !important;
              width: 100% !important;
              float: left;
          }

          .file-manager-middel {
              display: block !important;
              width: 100% !important;
              float: left;
          }

          .file-manager-footer {
              margin-left: 0 !important;
          }

          .file-manager-search {
              position: relative;
              margin: 0;
              margin-top: 5px;
              display: block;
          }

          .file-manager-search input {
              width: 100%;
          }
      }

      a.upload-text {
          font-size: 1vw;
          font-weight: bold;
          display: inline-block;
          margin-bottom: 10px;
      }

      div#post_select_image_container {
          width: 200px;
          height: 250px;
      }

      div#post_select_image_container .post-select-image-container img {
          width: 100%;
      }

      .btn-browse-files {
          background-color: transparent !important;
          color: #979ba1;
          border-color: #cfd3d9 !important;
          margin-top: 10px;
      }

      /* Hide scrollbar for Chrome, Safari and Opera */
      .file-manager-content::-webkit-scrollbar {
          display: none;
          background: transparent;
          width: 0;
          /* Remove scrollbar space */
          /* Optional: just make scrollbar invisible */
      }

      /* Hide scrollbar for IE, Edge and Firefox */
      .file-manager-content {
          -ms-overflow-style: none;
          /* IE and Edge */
          scrollbar-width: none;
          /* Firefox */
      }
  </style>
  <div class="row">
      <div class="col-md-9 ">
          @php
              $langs[] = '';
          @endphp
          @foreach (config('app.multilocale') as $lang)
              @php
                  $langs[] = $lang;
              @endphp
              <div class="x_panel">
                  <div class="x_title">
                      <h3>Add New Page ( {{ $lang == 'en' ? 'English' : 'Bangla' }} )</h3>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <br />
                      <div class=" form-group has-feedback">
                          <input type="text" name="name_{{ $lang }}" id="mySelect_{{ $lang }}"
                              onchange="myFunction_{{ $lang }}()"
                              class="form-control slugsearch_{{ $lang }}" placeholder="Add Title">
                          <input type="hidden" name="title_{{ $lang }}" id="titleValue_{{ $lang }}"
                              value="" class="form-control">
                      </div>
                      <input class="form-check-input" name="userId" type="hidden" value="{{ $userid }}" checked>
                      <div class="form-group has-feedback">
                          <input type="hidden" name="slug_{{ $lang }}" id="slugValue_{{ $lang }}"
                              value="" />
                      </div>
                      <div class="form-group has-feedback">
                          <input type="hidden" name="link_{{ $lang }}" id="linkValue_{{ $lang }}"
                              value="" />
                          Permalink: <span id="parmalink_{{ $lang }}"> </span>
                      </div>
                      <div class=" form-group has-feedback">
                          <textarea name="content_{{ $lang }}" class="my-editor_{{ $lang }} form-control"
                              id="my-editor_{{ $lang }}" cols="50" rows="20"></textarea>
                      </div>
                  </div>
              </div>
              {{-- Exarpt field --}}
              {{-- <div class="x_panel">
                            <div class="x_title">
                                <h3>Exarpt</h3>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class=" form-group has-feedback">
                                    <textarea name="excerpt" class=" form-control" cols="10" rows="5"></textarea>
                                </div>
                            </div>
                        </div> --}}
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              <script language="javascript">
                  function myFunction_{{ $lang }}() {
                      var strng = document.getElementById("mySelect_{{ $lang }}").value;
                      var APP_URL = {!! json_encode(url('/')) !!}
                      const spt = strng.split(" ");
                      var imp = spt.join('-');
                      document.getElementById("linkValue_{{ $lang }}").value = APP_URL + '/' + imp;
                      document.getElementById("parmalink_{{ $lang }}").innerHTML = APP_URL + '/' + imp;
                      document.getElementById("titleValue_{{ $lang }}").value = strng;
                      document.getElementById("slugValue_{{ $lang }}").value = imp;

                  }
              </script>
              <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
              <script>
                  var options_{{ $lang }} = {
                      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
                      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}',
                      allowedContent: true
                  };
              </script>
              <script>
                  CKEDITOR.replace('my-editor_{{ $lang }}', options_{{ $lang }});
                  CKEDITOR.replace('expt-editor_{{ $lang }}', options_{{ $lang }});
              </script>


              <script language="javascript">
                  // Ajex search 
                  $('.slugsearch_{{ $lang }}').on('change', function() {

                      var strng = document.getElementById("mySelect_{{ $lang }}").value;
                      const spt = strng.split(" ");
                      var imp = spt.join('_');
                      var slg = document.getElementById("slugValue_{{ $lang }}").value = imp;
                      $value = $(this).val();


                      $.ajax({
                          type: 'get',
                          url: "{{ route('superAdmin.page.slugsearch') }}",
                          data: {
                              'slugsearch': $value
                          },
                          success: function(data) {
                              if (data) {
                                  document.getElementById("slugValue_{{ $lang }}").value = data + "_1";

                              } else {
                                  document.getElementById("slugValue_{{ $lang }}").value = imp;
                              }

                              // alert(data)
                              // $('.slugValue').data
                              // $('table').html(data);
                          }
                      });
                  })
              </script>
              <script type="text/javascript">
                  $.ajaxSetup({
                      headers: {
                          'csrftoken': '{{ csrf_token() }}'
                      }
                  });
              </script>
          @endforeach
      </div>
      <div class="col-md-3 ">

          <div class="x_panel">
              <div class="x_title">
                  <h3>Parent page</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="item form-group">
                      <select class="custom-select" name="parent_id" id="inputGroupSelect01">
                          <option selected value="0">Choose...</option>
                          @if ($pages)
                              @foreach ($pages as $page)
                                  <option value="{{ $page->id }}">{{ $page->name }}</option>
                                  @if (count($page->subpage) > 0)
                                      @foreach ($page->subpage as $sub)
                                          <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                          @if (count($sub->subpage) > 0)
                                              @include('newpage.createsubpages', [
                                                  'page' => $sub->subpage,
                                              ])
                                          @endif
                                      @endforeach
                                  @endif
                              @endforeach
                          @endif
                      </select>
                  </div>
              </div>
          </div>
          <div class="x_panel">
              <div class="x_title">
                  <h3>Feature Image</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="form-group">
                      <strong>Image:</strong>
                      <a href="" type="text" class="upload-text" data-toggle="modal"
                          data-target="#image_file_manager">
                          Featured image
                      </a>
                      <div id="post_select_image_container" class="post-select-image-container">
                          <a href="" type="text" class="upload-text" data-toggle="modal"
                              data-target="#image_file_manager">
                              <img src="{{ asset('img/profile/cemera.jpg') }}" width="170px" height="200px"
                                  alt="" title="">
                          </a>
                      </div>

                      <input type="hidden" name="image_id" id="image_id">
                      <input type="hidden" name="image_name" id="image_name">
                      <input type="hidden" name="alt" id="alt_value">
                      <input type="hidden" name="title" id="title_value">
                      <input type="hidden" name="caption" id="caption_value">
                      <input type="hidden" name="description" id="description_value">
                  </div>
              </div>
          </div>



          <div class="x_panel">
              <div class="x_title">
                  <h3>File Upload</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="chooseFile"
                          accept=".doc,.docx,.csv,.xlsx,.txt,.pdf, application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                      <label class="custom-file-label" for="chooseFile">Select file</label>
                  </div>
              </div>
          </div>

          <div class="x_panel">
              <div class="x_title">
                  <h3>Video Upload</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <input type="file" name="video" class="custom-file-input" id="chooseVideo"
                      accept="video/mp4,video/x-m4v,video/*">
                  <div class="extention-panel" id="btn_delete_post_main_video">

                      {{-- ======================================== --}}
                      <span style="margin: 5% 0 1% 0; display:block;"> Enter a YouTube
                          URL:</span>
                      <input id="myUrl" type="text" name="youtubevideo" class="form-control mb-2" />
                      {{-- <p onclick="myVideo()" class="btn btn-success btn-sm"> conver embade</p> --}}

                      {{-- ======================================== --}}


                      {{-- {{ $post->file }} --}}
                      <label class="custom-file-label" for="chooseVideo">Select Video (mp4)</label>
                  </div>
              </div>
          </div>

          <div class="x_panel">
              <div class="x_title">
                  <h3>Active / Inactive</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="">
                      <label>
                          <input type="hidden" value="0" class="js-switch" name="status">
                          <input type="checkbox" value="1" class="js-switch" name="status"
                              @if ('checked') checked @endif>
                      </label>
                  </div>
              </div>
          </div>
          <div class="x_panel">
              <div class="x_title">
                  <h3>Template</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="col ">
                      <div class="x_content">
                          <div class="item form-group">
                              <select class="custom-select" name="template" id="inputGroupSelect01">
                                  <option value="1">Default page </option>
                                  <option value="2">Full Width page </option>
                                  <option value="5">Contact Page </option>
                                  <option value="3">Sidebar page </option>
                                  <option value="4">Gallery page </option>
                                  <option value="5">Video page </option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="x_panel" style="display: none;">
              <div class="x_title">
                  <h3>Only Admin Display</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="">
                      <label>
                          <input type="checkbox" value="1" class="js-switch" name="privatepage">
                          <input type="hidden" value="0" class="js-switch" name="privatepage"
                              @if ('checked') checked @endif>
                      </label>
                  </div>
              </div>
          </div>
          <div class="x_panel">
              <div class="x_title">
                  <h3>Publish</h3>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="col">
                      <div class="form-group">
                          <div class='input-group date'>
                              {{-- <input type="text" id="datetime" class="form-control" name="publish_at"
                                                value=" "> --}}
                              <input type='text' id='datetimepicker' class="form-control" name="publish_at"
                                  value="{{ date('Y-m-d H:i', time()) }}" />
                          </div>
                      </div>
                      <script type="text/javascript">
                          // var today = new Date();
                          // document.getElementById("datetime").value = today.getFullYear() +
                          //     '-' + ('0' + (today.getMonth() + 1)).slice(-2) +
                          //     '-' + ('0' + today.getDate()).slice(-2) +
                          //     ' ' + ('0' + today.getHours()).slice(-2) +
                          //     ':' + ('0' + today.getMinutes()).slice(-2) +
                          //     ':' + ('0' + today.getSeconds()).slice(-2);
                          $(function() {
                              $('#datetimepicker').datetimepicker({
                                  format: 'yyyy-mm-dd hh:ii',
                                  autoclose: true,
                                  todayHighlight: true,
                              });
                          });
                      </script>
                  </div>
                  <div class="col-md-12 mt-2">
                      <button type="submit" class="btn btn-success" style="width:100%;"
                          id="submit-all">Publish</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
