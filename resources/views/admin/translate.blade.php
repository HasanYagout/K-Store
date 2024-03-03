<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="content container-fluid">
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a
                    href="">{{\App\Helpers\Helpers::translate('Dashboard')}}</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">{{\App\Helpers\Helpers::translate('language_setting')}}</li>
        </ol>
    </nav>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="alert alert-danger mb-3" role="alert">
                {{\App\Helpers\Helpers::translate('changing_some_settings_will_take_time_to_show_effect_please_clear_session_or_wait_for_60_minutes_else_browse_from_incognito_mode')}}
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>{{\App\Helpers\Helpers::translate('language_table')}}</h5>
                    <button class="btn btn-primary btn-icon-split float-right" data-toggle="modal"
                            data-target="#lang-modal">
                        <i class="tio-add-circle"></i>
                        <span class="text">{{\App\Helpers\Helpers::translate('add_new_language')}}</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-hover "
                               style="width:100%; text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                            <thead>
                            <tr>
                                <th scope="col">{{\App\Helpers\Helpers::translate('SL#')}}</th>
                                <th scope="col">{{\App\Helpers\Helpers::translate('Id')}}</th>
                                <th scope="col">{{\App\Helpers\Helpers::translate('name')}}</th>
                                <th scope="col">{{\App\Helpers\Helpers::translate('Code')}}</th>
                                <th scope="col">{{\App\Helpers\Helpers::translate('status')}}</th>
                                <th scope="col">{{\App\Helpers\Helpers::translate('default')}} {{\App\Helpers\Helpers::translate('status')}}</th>
                                <th scope="col" style="width: 100px"
                                    class="text-center">{{\App\Helpers\Helpers::translate('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($language=\App\Models\BusinessSettings::where('name','default_lang')->first())
                            @foreach(json_decode($language['value'],true) as $key =>$data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data['id']}}</td>
                                    <td>{{$data['name']}} ( {{isset($data['direction'])?$data['direction']:'ltr'}}
                                        )
                                    </td>
                                    <td>{{$data['code']}}</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox"
                                                   onclick="updateStatus('','{{$data['code']}}')"
                                                   class="status" {{$data['status']==1?'checked':''}}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox"
                                                   onclick="window.location.href =''"
                                                   class="status" {{ ((array_key_exists('default', $data) && $data['default']==true) ? 'checked': ((array_key_exists('default', $data) && $data['default']==false) ? '' : 'disabled')) }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td class="text-center">

                                        <div class="dropdown float-right">
                                            <button class="btn btn-seconary btn-sm dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i class="tio-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                @if($data['code']!='en')
                                                    <a class="dropdown-item" data-toggle="modal"
                                                       data-target="#lang-modal-update-{{$data['code']}}">{{\App\Helpers\Helpers::translate('update')}}</a>
                                                    @if ($data['default']==true)
                                                        <a class="dropdown-item"
                                                           href="javascript:" onclick="default_language_delete_alert()">{{\App\Helpers\Helpers::translate('Delete')}}</a>
                                                    @else
                                                        <a class="dropdown-item delete"
                                                           id="{{route('admin.business-settings.language.delete',[$data['code']])}}">{{\App\Helpers\Helpers::translate('Delete')}}</a>

                                                    @endif
                                                @endif
                                                <a class="dropdown-item"
                                                   href="">{{\App\Helpers\Helpers::translate('Translate')}}</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lang-modal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{\App\Helpers\Helpers::translate('new_language')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post"
                      style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{\App\Helpers\Helpers::translate('language')}} </label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="message-text"
                                           class="col-form-label">{{\App\Helpers\Helpers::translate('country_code')}}</label>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">{{\App\Helpers\Helpers::translate('direction')}} :</label>
                                    <select class="form-control" name="direction">
                                        <option value="ltr">LTR</option>
                                        <option value="rtl">RTL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{\App\Helpers\Helpers::translate('close')}}</button>
                        <button type="submit" class="btn btn-primary">{{\App\Helpers\Helpers::translate('Add')}} <i
                                class="fa fa-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach(json_decode($language['value'],true) as $key =>$data)
        <div class="modal fade" id="lang-modal-update-{{$data['code']}}" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{\App\Helpers\Helpers::translate('new_language')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="recipient-name"
                                               class="col-form-label">{{\App\Helpers\Helpers::translate('language')}} </label>
                                        <input type="text" class="form-control" value="{{$data['name']}}"
                                               name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="message-text"
                                               class="col-form-label">{{\App\Helpers\Helpers::translate('country_code')}}</label>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-form-label">{{\App\Helpers\Helpers::translate('direction')}} :</label>
                                        <select class="form-control" name="direction">
                                            <option
                                                value="ltr" {{isset($data['direction'])?$data['direction']=='ltr'?'selected':'':''}}>
                                                LTR
                                            </option>
                                            <option
                                                value="rtl" {{isset($data['direction'])?$data['direction']=='rtl'?'selected':'':''}}>
                                                RTL
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{\App\Helpers\Helpers::translate('close')}}</button>
                            <button type="submit" class="btn btn-primary">{{\App\Helpers\Helpers::translate('update')}} <i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="{{asset('public/assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
</body>
</html>

