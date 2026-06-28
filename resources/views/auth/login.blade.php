<x-layout title="Login">
   
    <div class="auth-shell">
        <div class="auth-panel">
            <div class="auth-hero">
                <div>
                    <span class="auth-badge">Welcome back</span>
                    <h2 class="mt-4 text-3xl font-semibold leading-tight">Sign in and continue building your notes.</h2>
                    <p class="mt-4 text-sm leading-6 text-white/80">
                        Secure access to your workspace, your projects, and your daily notes.
                    </p>
                </div>

                <ul class="auth-highlights">
                    <li>Quick sign-in with email</li>
                    <li>Keep your workflow flowing</li>
                    <li>Access notes from any device</li>
                </ul>
            </div>

            <div class="auth-form-card">
                <div class="mb-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-primary">Login</p>
                    <h1 class="section-title mt-2">Welcome back</h1>
                </div>

                <form class="space-y-4" action="/login" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label" for="email">Email address</label>
                        <input class="form-input" id="email" name="email" type="email" placeholder="you@example.com" required value="{{ old('email') }}">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-input" id="password" name="password" type="password" placeholder="Enter your password" required>
                    </div>
                    
                    <x-Errors name="email"/>
                    <button class="auth-action-button" type="submit" data-test="login-button">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 6L20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Sign in
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-muted">
                    
                    <a class="ml-1 font-semibold text-primary" href="/register">Don't have an account?</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>
