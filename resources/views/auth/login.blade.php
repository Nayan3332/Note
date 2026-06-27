<x-layout>
    <style>
        .auth-action-button {
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

        .auth-action-button:hover {
            transform: translateY(-1px) scale(1.01);
            box-shadow: 0 22px 54px rgba(124, 58, 237, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.08) inset;
        }

        .auth-action-button:active {
            transform: translateY(0);
            box-shadow: 0 14px 32px rgba(124, 58, 237, 0.2), 0 0 0 1px rgba(255, 255, 255, 0.1) inset;
        }

        .auth-action-button svg {
            width: 1.1rem;
            height: 1.1rem;
            color: inherit;
        }
    </style>

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
                        <input class="form-input" id="email" name="email" type="email" placeholder="you@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-input" id="password" name="password" type="password" placeholder="Enter your password" required>
                    </div>

                    <button class="auth-action-button" type="submit">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 6L20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Sign in
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-muted">
                    Don't have an account?
                    <a class="ml-1 font-semibold text-primary" href="/register">Create one</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>
