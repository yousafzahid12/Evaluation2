@include('page_components.dashboard.header')

                                <table id="leaddocs" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>

                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Co-operated_By</th>
                                        <th>Created_By</th>
                                        <th>Shared_By</th>
                                        <th>Recieved_By</th>
                                        <th>Created_At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($leads as $leads)
                                    <tr>
                                        <td>{{$leads->id}}</td>
                                        <td>{{$leads->name}}</td>
                                        <td>{{$leads->name1}}</td>
                                        <td>{{$leads->user_name}}</td>
                                        <td>{{$leads->shared_by}}</td>
                                        <td>{{$leads->shared_with}}</td>
                                        <td>{{$leads->created_at}}</td>
{{--                                        <td>{{$leads->share1}}</td>--}}
{{--                                        <td>{{$leads->recieve}}</td>--}}

                                    </tr>
                                    @endforeach
{{--                                    @foreach($name as $names)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$names->name}}</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     @include('page_components.dashboard.footer');

