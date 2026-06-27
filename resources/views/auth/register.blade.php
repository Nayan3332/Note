<x-layout>
    <style>
        .register-action-button {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1rem 1.3rem;
            border-radius: 1rem;
            background: linear-gradient(90deg, #8b5cf6 0%, #7c3aed 45%, #6d28d9 100%);
            color: #ffffff;
            border: none;
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.2;
            box-shadow: 0 18px 45px rgba(124, 58, 237, 0.26), 0 0 0 1px rgba(255, 255, 255, 0.06) inset;
            cursor: pointer;
            transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
            overflow: hidden;
        }

        .register-action-button:hover {
            transform: translateY(-1px) scale(1.01);
            box-shadow: 0 22px 54px rgba(124, 58, 237, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.08) inset;
        }

        .register-action-button:active {
            transform: translateY(0);
            box-shadow: 0 14px 32px rgba(124, 58, 237, 0.2), 0 0 0 1px rgba(255, 255, 255, 0.1) inset;
        }

        .register-action-button svg {
            width: 1.1rem;
            height: 1.1rem;
            color: inherit;
        }
    </style>
    <div class="auth-shell">
        <div class="auth-panel">
            <div class="auth-hero">
                <div>
                    <span class="auth-badge">Create your account</span>
                    <h2 class="mt-4 text-3xl font-semibold leading-tight">Organize your ideas in one workspace.</h2>
                    <p class="mt-4 text-sm leading-6 text-white/80">
                        Capture notes, break down plans, and keep every important step close at hand.
                        Start faster with a smart workspace designed for focus.
                    </p>
                    <h1 class="mt-6 text-2xl font-semibold leading-tight center ">Get started in minutes.</h1>
                </div>

                <ul class="auth-highlights">
                    <li>All your notes in one place</li>
                    <li>Collaborate seamlessly with your team</li>
                    <li>Organize your ideas in one workspace</li>
                    <li>Fast setup with a polished experience</li>
                    <li>Private, focused note-taking</li>
                    <li>Simple next steps for every project</li>
                </ul>
            </div>

            <div class="auth-form-card">
                <div class="mb-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-primary">Join now</p>
                    <h1 class="section-title mt-2">Create your account</h1>
                </div>

                <form class="space-y-4" action="/register" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label" for="name">Full name:</label>
                        <input class="form-input" id="name" name="name" type="text" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email address:</label>
                        <input class="form-input" id="email" name="email" type="email" placeholder="You@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password:</label>
                        <input class="form-input" id="password" name="password" type="password" placeholder="At least 8 characters" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Confirm password:</label>
                        <input class="form-input" id="password_confirmation" name="password_confirmation" type="password" placeholder="Re-enter your password" required>
                    </div>

                    <button class="register-action-button" type="submit">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Create account
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-muted">
                    Already have an account?
                    <a class="ml-1 font-semibold text-primary" href="/">Return home</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>