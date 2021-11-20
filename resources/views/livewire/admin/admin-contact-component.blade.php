<div class="container contain-bg">
    <style>
        .pull-right{
            float: right;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row p-3">
                        <div class="col-md-6">
                            Contact Message
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Date Send</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->comment }}</td>
                                    <td>{{ $contact->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$contacts->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
</div>

