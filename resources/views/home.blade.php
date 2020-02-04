@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>課題管理システム（仮名）にようこそ！</p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-primary card-outline">
                    <div class="card-header border-0">
                        <h3 class="card-title">更新された課題</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <tbody>
                            <tr>
                                <td>URLのgetクエリのidをマイナスにするとエラーになる</td>
                                <td>マンハッタン計画</td>
                                <td>ロバート</td>
                            </tr>
                            <tr>
                                <td>/profile ページが存在しない（404になる）</td>
                                <td>マンハッタン計画</td>
                                <td>ロバート</td>
                            </tr>
                            <tr>
                                <td>画像を二回以上アップロードしても1回目の画像のまま</td>
                                <td>マンハッタン計画</td>
                                <td>ロバート</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-primary card-outline">
                    <div class="card-header border-0">
                        <h3 class="card-title">担当課題の進捗</h3>
                    </div>
                    <div class="card-body">
                        <div><code>未着手</code></div>
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>

                        <div><code>処理中</code></div>
                        <div class="progress active">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>

                        <div><code>処理済</code></div>
                        <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

