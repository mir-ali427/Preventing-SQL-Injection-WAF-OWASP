# Preventing-SQL-Injection-WAF-OWASP
A hands-on cybersecurity project demonstrating SQL Injection attacks on a vulnerable PHP application and their prevention using ModSecurity WAF with OWASP Core Rule Set on Apache.

##Project Objective
- Demonstrate a SQL Injection vulnerability in a PHP login system
- Show how attackers bypass authentication
- Implement ModSecurity WAF with OWASP CRS
- Prevent SQL Injection attacks using a security layer

## Tools & Technologies
- Ubuntu Linux
- Apache Web Server
- PHP
- MySQL
- ModSecurity WAF
- OWASP Core  Rule Set (CRS)

  ## SQL Injection Attack (Before WAF)
The login application directly inserts user input into SQL queries without validation.

Example payload:
admin' OR '1'='1' --

This allows attackers to bypass authentication.
## Prevention Using ModSecurity WAF
ModSecurity with OWASP CRS was enabled on Apache.

The same SQL Injection payload was detected and blocked.
Result:
- HTTP 403 Forbidden

  ## Repository Structure
vulnerable-app/   → PHP login code
database/         → MySQL SQL file
screenshots/      → WAF logs and blocked attack proof
README.md
## Conclusion
This project demonstrates how Web Application Firewalls can protect vulnerable applications from SQL Injection attacks and highlights the importance of defense-in-depth in web security.
## Disclaimer
This project is for educational purposes only. Do not test systems without permission.

- Attack logged in ModSecurity audit logs
