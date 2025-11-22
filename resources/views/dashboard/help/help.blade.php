<!-- resources/views/help.blade.php -->
@extends('dashboard.layout')

@section('title', 'Help Center')

@section('content')
<div class="page-title">Help Center</div>

<div class="card">
    <div class="card-header">Frequently Asked Questions</div>
    <div class="card-body">
        <ul class="faq-list">
            <li><strong>How do I report an issue?</strong><br>You can go to the Report page and submit the required details.</li>
            <li><strong>How do I update my account?</strong><br>Visit the Account or Settings page and make changes.</li>
            <li><strong>Who can access the dashboard?</strong><br>Only authorized barangay personnel can log in and access the system.</li>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-header">Contact Support</div>
    <div class="card-body">
        <p>If you still need help, you can reach us through:</p>
        <ul class="contact-list">
            <li>Email: <a href="mailto:barangaymanapao.helpdesk@gmail.com">barangaymanapao.helpdesk@gmail.com</a></li>
            <li>Phone: 0912 345 6789</li>
            <li>Facebook Page: <a href="#">Barangay Manapao Official</a></li>
        </ul>
    </div>
</div>
@endsection