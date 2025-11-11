// See https://aka.ms/new-console-template for more information
Console.WriteLine("Wat is het wachtwoord?");
string? pass = Console.ReadLine();
Console.WriteLine("Baas ingelogd:");
Console.WriteLine(pass == "baas");