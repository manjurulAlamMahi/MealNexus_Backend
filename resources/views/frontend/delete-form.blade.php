<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.min.js"></script>

    <style>
        :root {
            --primary-color: #e11d48;
            /* Rose 600 */
            --primary-hover: #be123c;
            /* Rose 700 */
            --bg-color: #f8fafc;
            /* Slate 50 */
            --card-bg: #ffffff;
            --text-main: #0f172a;
            /* Slate 900 */
            --text-muted: #64748b;
            /* Slate 500 */
            --border-color: #e2e8f0;
            /* Slate 200 */
            --focus-ring: rgba(225, 29, 72, 0.2);
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background: var(--card-bg);
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 480px;
            transition: transform 0.2s ease;
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-main);
        }

        .header p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--text-main);
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s ease;
            background: #fff;
            color: var(--text-main);
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px var(--focus-ring);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .password-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s;
        }

        .password-toggle:hover {
            color: var(--text-main);
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 24px 0;
            cursor: pointer;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-top: 2px;
            cursor: pointer;
            accent-color: var(--primary-color);
        }

        .checkbox-label {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.5;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        .btn-submit:active {
            transform: scale(0.98);
        }

        .btn-submit:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .success-message {
            background-color: white;
            color: green;
            font-size: 16px;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-message {
            background-color: white;
            color: red;
            font-size: 16px;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Loading Spinner */
        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ffffff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto;
        }

        /* Toast container */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            /* Green background for success */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
            /* Ensures the toast stays on top */
            font-size: 20px;
            font-weight: bold;
        }

        /* Error toast */
        .toast.error {
            background-color: #f44336;
            /* Red background for errors */
        }

        /* Success toast */
        .toast.success {
            background-color: #4CAF50;
            /* Green background for success */
        }


        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Display success or error message if available -->
        <div id="toastMessage" class="toast" style="display: none;">
            <!-- Message will be injected here -->
        </div>

        <div class="header">
            <h1>Delete Account</h1>
            <p>We're sorry to see you go. Please verify your identity to proceed with account deletion.</p>
        </div>

        <form action="{{ route('user.store') }}" method="POST" id="deleteUserForm">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="john@example.com" required>
            </div>

            <div class="form-group password-wrapper">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <button type="button" class="password-toggle" id="togglePassword"
                    aria-label="Toggle password visibility">
                    <!-- SVG for eye toggle -->
                </button>
            </div>

            <div class="form-group">
                <label for="reason">Reason for leaving</label>
                <textarea id="reason" name="reason" placeholder="Please tell us why you are deleting your account..."></textarea>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="confirm" required>
                <label for="confirm" class="checkbox-label">I understand that this action is irreversible and all my
                    data will be permanently deleted.</label>
            </div>

            <!-- Delete button triggers SweetAlert -->
            <button type="button" class="btn-submit" id="deleteBtn">Delete Account</button>
        </form>

    </div>

    <script>
        // SweetAlert Confirmation for Deletion
        document.getElementById('deleteBtn').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent form submission initially

            // SweetAlert2 Confirmation Dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete your account? This action is irreversible.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e11d48', // Red for delete
                cancelButtonColor: '#3085d6', // Blue for cancel
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If "Yes" is clicked, submit the form to delete the user
                    document.getElementById('deleteUserForm').submit();
                } else {
                    // If "Cancel" is clicked, do nothing
                    console.log('User canceled the delete action');
                }
            });
        });

        // Show success or error messages if available
        const successMessage = @json(session('success'));
        const errorMessage = @json(session('error'));

        if (successMessage) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: successMessage,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        }

        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: errorMessage,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        }
    </script>

</body>

</html>
