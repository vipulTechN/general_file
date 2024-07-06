
document.addEventListener('DOMContentLoaded', function() {
   console.log('DOMContentLoaded event fired');
   var form = document.getElementById('submit_propertyid');
   console.log('Form element selected:', form);

   var submitButton = document.getElementById('submit_buttonid');
   console.log('Submit button element selected:', submitButton);

   if (form && submitButton) { // Check if form and submit button exist
       submitButton.addEventListener('click', function(event) {
           console.log('Submit button clicked');
           event.preventDefault(); // Prevent default form submission

           var requiredInputs = form.querySelectorAll('input[required], select[required], textarea[required], input[type="file"][required]');
           console.log('Required inputs:', requiredInputs); // Check if required inputs are selected

           var isValid = true;
           console.log('Function Running');

           var firstEmptyInput = null;

           requiredInputs.forEach(function(input) {
               if (!input.value.trim()) {
                   console.log('this works');
                   if (!firstEmptyInput) {
                       firstEmptyInput = input;
                   }
                   if (!input.classList.contains('required-error')) {
                       input.classList.add('required-error');
                       input.style.borderBottom = '1px solid red';
                       input.style.borderTop='none';
                       input.style.borderRight= 'none';
                       input.style.borderLeft= 'none';
                       input.insertAdjacentHTML('afterend', '<br><span class="error-message" style="color: red; font-size: 12px;">(This field is required)</span>');
                   }
                   isValid = false;
               } else {
                   if (input.classList.contains('required-error')) {
                       input.classList.remove('required-error');
                       input.style.border = ''; // Reset border for filled required fields
                       var errorMessage = input.nextElementSibling;
                       if (errorMessage && errorMessage.classList.contains('error-message')) {
                           errorMessage.remove();
                       }
                   }
               }
           });

           if (!isValid) {
               console.log('Please fill out all required fields.');
               if (firstEmptyInput) {
                   firstEmptyInput.focus(); // Focus on the first empty required input field
                   // Scroll to the first empty required input field
                   firstEmptyInput.scrollIntoView({ behavior: 'smooth', block: 'start' });
               }
           } else {
               form.submit(); // Submit the form if all fields are valid
           }
       });
   } else {
       console.log('Form with ID "submit_propertyid" or submit button with ID "submit_button" not found.');
   }
});