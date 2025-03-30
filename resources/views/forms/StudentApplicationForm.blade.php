@extends('layouts.app')
@vite(['resources/css/applicationForm.css'])
@vite(['resources/js/applicationForm.js'])

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@section('content')
<div class="container mx-auto px-4 py-8 max-w-6xl">
        <div class="text-center mb-8">
            <h1 class="text-5xl font-bold text-[#132080] tracking-wider shrikhand-regular">APPLICATION FORM</h1>
            <h2 class="text-xl font-semibold text-secondary mt-2">Join the Radio Engineering Circle Inc. and be part of a
                community dedicated to innovation, knowledge-sharing, and professional growth in the field of radio engineering.</h2>
        </div>

        <div class="mb-6 flex justify-between items-center">
            <span id="memberTypeLabel" class="inline-block px-4 py-1 bg-blue-100 text-[#132080] rounded-full text-2xl tracking-wide font-medium fs-elliot">
                Student Member
            </span>
        </div>

        <form class="space-y-6">
        <!-- Personal Information Section -->
            <div class="form-section bg-white p-6 rounded-lg shadow-sm border border-gray-400">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center fs-elliot">
                    <i class="fas fa-user-circle mr-2 text-primary"></i> Personal Information
                    <span class="flex-1 border-b border-gray-400 ml-4"></span>
                </h3>
                
                <div class="form-grid">
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Last name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Cruz" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">First name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Juan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Middle name<span class="ml-2 text-gray-400">(Optional)</span></label></label>
                        <input type="text" placeholder="Ex. De la" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Suffix<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <input type="text" placeholder="Ex. Jr" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Sex <span class="text-red-500">*</span></label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option disabled selected>Select a Type...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Birthdate <span class="text-red-500">*</span></label>
                        <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Civil Status <span class="text-red-500">*</span></label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option disabled selected>Select a type...</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widowed</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Citizenship <span class="text-red-500">*</span></label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option disabled selected>Select a type...</option>
                            <option>Filipino</option>
                            <option>Dual Citizen</option>
                        </select>
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-md font-medium text-gray-700 mb-1">Blood type<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option disabled selected>Select a type...</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                </div>

            <!-- ADDRESS INFORMATION SECTION -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center mt-10 fs-elliot">
                    <i class="fas fa-home mr-2 text-primary"></i> Address Information
                    <span class="flex-1 border-b border-gray-400 ml-4"></span>
                </h3>

                <div class="form-grid">
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">House/Block/Lot/Phase No. <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. 123" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Street/Avenue/Drive<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <input type="text" placeholder="Ex. Main Street" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md  font-medium text-gray-700 mb-1">Purok<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <input type="text" placeholder="Ex. Purok 2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Village/Subdivision<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <input type="text" placeholder="Ex. Greenhills" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Barangay <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Barangay 1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">City <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Manila" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                     <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Province <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Metro Manila" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Zip Code <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. 1000" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                </div>
                
            <!-- CONTACT INFORMATION SECTION -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center mt-10 fs-elliot">
                    <i class="fas fa-phone-alt mr-2 text-primary"></i> Contact Information
                    <span class="flex-1 border-b border-gray-400 ml-4"></span>
                </h3>
                
                <div class="form-grid">
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Cellphone Number <span class="text-red-500">*</span></label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+63</span>
                            <input type="tel" placeholder="Ex. +63 9XX XXX XXXX" class="flex-1 px-3 py-2 border border-gray-300 rounded-r-md focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Telephone Number<span class="ml-2 text-gray-400">(Optional)</span></label>
                        <input type="tel" placeholder="Ex. (02) 1XXX XXXX" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" placeholder="Ex. juandelacruz@example.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Emergency Contact <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Maria Cruz" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Emergency Contact No. <span class="text-red-500">*</span></label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+63</span>
                            <input type="tel" placeholder="Ex. +63 9XX XXX XXXX" class="flex-1 px-3 py-2 border border-gray-300 rounded-r-md focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-1">Relationship <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ex. Mother" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                </div>
            </div>

        <!-- Form Actions -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-8">
                <div class="flex items-center space-x-4 text-sm text-gray-600">
                    <a href="#" class="text-primary hover:underline">Terms and Conditions</a>
                    <span>|</span>
                    <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                </div>
                    
                <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white font-medium rounded-md shadow-md hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all transform hover:scale-105">
                    <i class="fas fa-paper-plane mr-2"></i> SUBMIT APPLICATION
                </button>
            </div>
        </div>
@endsection