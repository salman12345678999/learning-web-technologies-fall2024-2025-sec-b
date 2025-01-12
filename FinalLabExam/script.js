document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("registerForm").addEventListener("submit", async (e) => {
        e.preventDefault();
        const name = document.getElementById("name").value;
        const contact = document.getElementById("contact").value;
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (!name || !contact || !username || !password) {
            alert("All fields are required!");
            return;
        }

        const response = await fetch("register.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ name, contact, username, password }),
        });

        const result = await response.json();
        alert(result.message);
    });
    document.getElementById("updateForm").addEventListener("submit", async (e) => {
        e.preventDefault();
        const id = document.getElementById("updateId").value;
        const name = document.getElementById("updateName").value;
        const contact = document.getElementById("updateContact").value;
        const username = document.getElementById("updateUsername").value;
        const password = document.getElementById("updatePassword").value;

        const response = await fetch("update.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ id, name, contact, username, password }),
        });

        const result = await response.json();
        alert(result.message);
    });

    document.getElementById("deleteForm").addEventListener("submit", async (e) => {
        e.preventDefault();
        const id = document.getElementById("deleteId").value;

        const response = await fetch("delete.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ id }),
        });

        const result = await response.json();
        alert(result.message);
    });
    document.getElementById("searchBtn").addEventListener("click", async () => {
        const query = document.getElementById("searchQuery").value;

        const response = await fetch(`search.php?query=${query}`);
        const results = await response.json();

        const resultsDiv = document.getElementById("searchResults");
        resultsDiv.innerHTML = results.map(emp => `<p>${emp.name} - ${emp.contact_no}</p>`).join("");
    });
});