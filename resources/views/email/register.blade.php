@component('mail::message')

{{$email}}<br>
<h1>You have sucessfully logged in.</h1>
<p>And due to that reason we have deduced $100 from your balance </p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Email</th>
        <td>{{$email}}</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col" style="margin-left:10px">Amount</th>
        <td style="margin-left:10px">$100</td>
      </tr>
    </tbody>
  </table>
<br>
Thank You<br>
From,<br>
{{ siteName() }}
@endcomponent
