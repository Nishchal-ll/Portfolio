package main

import (
	"fmt"
	"net/http"
)

func helloHandler(w http.ResponseWriter, r *http.Request) {
	fmt.Fprintln(w, "Hello from Go backend")
}

func main() {
	http.HandleFunc("/api/hello", helloHandler)

	fmt.Println("Server running on port 8080")
	http.ListenAndServe(":8080", nil)
}