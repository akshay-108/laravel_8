<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>
    <div class="all-customers">
        <table class="customer-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Contact</th>
                    <th>Customer Age</th>
                    <th>Edit Customer</th>
                    <th>Delete Customer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->number}}</td>
                    <td>{{$customer->age}}</td>
                    <td>
                        <a href="{{url('edit-customer/'.$customer->id)}}" class="customer-edit-button">Edit</a>
                    </td>
                    <td>
                        <form action="{{url('delete-customer/'.$customer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="customer-delete-button" onclick="return confirm('Are you sure you want to delete ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>