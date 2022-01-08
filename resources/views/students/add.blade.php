@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-person-lines-fill"></i> Εισαγωγή Μαθητή
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Αρχική</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Εισαγωγή Μαθητή</li>
                        </ol>
                    </nav>

                    @include('session-messages')

                    <p class="text-primary">
                        <small><i class="bi bi-exclamation-diamond-fill me-2"></i> Καλωσήρθατε στην εισαγωγή νέου μαθητή </small>
                    </p>
                    <div class="mb-4">
                        <form class="row g-3" action="{{route('school.student.create')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Όνομα<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="Όνομα" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputLastName" class="form-label">Επίθετο<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Επίθετο" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Κωδικός<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="password" class="form-control" id="inputPassword4" name="password" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="formFile" class="form-label">Φωτογραφία</label>
                                    <input class="form-control" type="file" id="formFile" onchange="previewFile()">
                                    <div id="previewPhoto"></div>
                                    <input type="hidden" id="photoHiddenInput" name="photo" value="">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputBirthday" class="form-label">Ημ. Γέννησης<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="date" class="form-control" id="inputBirthday" name="birthday" placeholder="Γενέθλια" required>
                                </div>
                                <div class="col-3-md">
                                    <label for="inputAddress" class="form-label">Διεύθυνση<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Κώστα Βάρναλη 57" required>
                                </div>
                                <div class="col-3-md">
                                    <label for="inputAddress2" class="form-label">Διεύθυνση 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Δεύτερη Διεύθυνση">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">Πόλη<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputCity" name="city" placeholder="Αθήνα, ..." required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputZip" class="form-label">Ταχ. κώδικας<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputZip" name="zip" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputState" class="form-label">Φύλο<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputState" class="form-select" name="gender" required>
                                        <option value="Male" selected>Άνδρας</option>
                                        <option value="Female">Γυναίκα</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNationality" class="form-label">Εθνικότητα<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputNationality" name="nationality" placeholder="Ελληνική, Γερμανική, ..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputBloodType" class="form-label">Ομάδα Αίματος<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputBloodType" class="form-select" name="blood_type" required>
                                        <option selected>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPhone" class="form-label">Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="+30 69......" required>
                                </div>
                                <div class="col-5-md">
                                    <label for="inputIdCardNumber" class="form-label">Αρ. Ταυτότητας<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputIdCardNumber" name="id_card_number" placeholder="XX XXXXXX" required>
                                </div>
                            </div>
                            <div class="row mt-4 g-3">
                                <h6>Πληροφορίες Γονέων</h6>
                                <div class="col-md-3">
                                    <label for="inputFatherName" class="form-label">Πατρώνυμο<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFatherName" name="father_name" placeholder="Πατρώνυμο" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputFatherPhone" class="form-label">Τηλέφωνο Πατέρα<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFatherPhone" name="father_phone" placeholder="+30 69......" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputMotherName" class="form-label">Μητρώνυμο<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputMotherName" name="mother_name" placeholder="Μητρώνυμο" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputMotherPhone" class="form-label">Τηλέφωνο Μητέρας<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputMotherPhone" name="mother_phone" placeholder="+30 69......" required>
                                </div>
                                <div class="col-4-md">
                                    <label for="inputParentAddress" class="form-label">Διεύθυνση Γονέα<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputParentAddress" name="parent_address" placeholder="Κώστα Βάρναλη 57" required>
                                </div>
                            </div>
                            <div class="row mt-4 g-3">
                                <h6>Πληροφορίες Τμήματος</h6>
                                <div class="col-md-6">
                                    <label for="inputAssignToClass" class="form-label">Άθλημα:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select onchange="getSections(this);" class="form-select" id="inputAssignToClass" name="class_id" required>
                                        @isset($school_classes)
                                            <option selected disabled>Άθλημα</option>
                                            @foreach ($school_classes as $school_class)
                                                <option value="{{$school_class->id}}">{{$school_class->class_name}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAssignToSection" class="form-label">Τμήμα:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select class="form-select" id="inputAssignToSection" name="section_id" required>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputBoardRegistrationNumber" class="form-label">Αρ. Αθλητή</label>
                                    <input type="text" class="form-control" id="inputBoardRegistrationNumber" name="board_reg_no" placeholder="ΧΧΧΧΧΧ">
				</div>
 				<div class="row">
        			<div class="col-md-16">
                                    	<label for="inputNotes" class="form-label">Σημειώσεις</label>
                                  	<textarea rows="3" class="form-control" id="inputNotes" name="notes" placeholder="Notes"></textarea>
				</div>
				</div>
                                <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                            </div>
                            <div class="row mt-4">
                                <div class="col-12-md">
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-person-plus"></i> Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
<script>
    function getSections(obj) {
        var class_id = obj.options[obj.selectedIndex].value;

        var url = "{{route('get.sections.courses.by.classId')}}?class_id=" + class_id

        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            var sectionSelect = document.getElementById('inputAssignToSection');
            sectionSelect.options.length = 0;
            data.sections.unshift({'id': 0,'section_name': 'Τμήμα'})
            data.sections.forEach(function(section, key) {
                sectionSelect[key] = new Option(section.section_name, section.id);
            });
        })
        .catch(function(error) {
            console.log(error);
        });
    }
</script>
@include('components.photos.photo-input')
@endsection
