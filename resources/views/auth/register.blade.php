<x-layout title="Register">
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
                        <input class="form-input" id="name" name="name" type="text" placeholder="Your name" required value="{{ old('name') }}">
                        <x-errors name="name" />
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email address:</label>
                        <input class="form-input" id="email" name="email" type="email" placeholder="You@example.com" required value="{{ old('email') }}">
                        <x-errors name="email" />
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password:</label>
                        <input class="form-input" id="password" name="password" type="password" placeholder="At least 8 characters" required>
                        <x-errors name="password" />
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Confirm password:</label>
                        <input class="form-input" id="password_confirmation" name="password_confirmation" type="password" placeholder="Re-enter your password" required>
                        <x-errors name="password_confirmation" />
                    </div>
                    <button class="register-action-button" type="submit" name="register">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Create Account
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-muted">
                    <a class="font-semibold text-primary" href="/login">Already have an account?</a>
                    <a class="ml-1 font-semibold text-primary" href="/">Return home</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>